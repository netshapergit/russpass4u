<?php

abstract class AlterField extends Field {

	public static $tableAlter;

	public static $tableLayouts;

	public static $tableSelects;

	public static $tableCustomAlias;

	public static $customClass;

	public function layouts()
	{
		return $this->belongsToMany('Layout', static::$tableLayouts);
	}

	public function selects()
	{
		return $this->belongsToMany('Select', static::$tableSelects);
	}

	public function getRelationName()
	{
		return camel_case('field_' .  preg_replace('#_id$#', '', $this->alias));
	}

	public static function boot()
	{
		parent::boot();

		static::saving(Closure::bind(function($field)
		{
			$reId = '#_id$#';

			if (in_array($field->fieldType->alias, array('page', 'option'))
				&& !preg_match($reId, $field->alias)
			) {
				$field->alias = rtrim($field->alias, '_') . '_id';
			}

			// check field without _id already exists
			if (preg_match($reId, $field->alias)
				&& static::where('alias', preg_replace($reId, '', $field->alias))
					->where('id', '!=', $field->id ?: 0)
					->count() > 0
			) {
				return false;
			}
		}, null, get_called_class()));

		static::created(Closure::bind(function($field)
		{
			if ($field->fieldType->database_type)
			{
				static::addColumn($field);
			}
			elseif ($field->fieldType->relationship)
			{
				static::addTable($field);
			}

			static::updateCache();
		}, null, get_called_class()));

		static::updated(Closure::bind(function($field)
		{
			if ($field->field_type_id !== $field->original['field_type_id'] || $field->alias !== $field->original['alias'])
			{
				$originalFieldType = FieldType::find($field->original['field_type_id']);

				if ($field->fieldType->database_type && $originalFieldType->database_type)
				{
					static::renameColumn($field);
				}
				elseif ($field->fieldType->relationship === $originalFieldType->relationship)
				{
					static::renameTable($field);
				}
				else
				{
					if ($originalFieldType->database_type)
					{
						static::dropColumn($field->original['alias']);
					}
					elseif ($originalFieldType->relationship)
					{
						static::dropTable($field->original['alias'], $originalFieldType->relationship);
					}

					if ($field->fieldType->database_type)
					{
						static::addColumn($field);
					}
					elseif ($field->fieldType->relationship)
					{
						static::addTable($field);
					}
				}

				static::updateCache();
			}
		}, null, get_called_class()));

		static::deleted(Closure::bind(function($field)
		{
			DB::table(static::$tableLayouts)->where(snake_case(get_called_class()) . '_id', $field->id)->delete();
			DB::table(static::$tableSelects)->where(snake_case(get_called_class()) . '_id', $field->id)->delete();

			if ($field->fieldType->database_type)
			{
				static::dropColumn($field->alias);
			}
			elseif ($field->fieldType->relationship)
			{
				static::dropTable($field->alias, $field->fieldType->relationship);
			}

			static::updateCache();
		}, null, get_called_class()));
	}

	public static function updateCache($checkExists = false)
	{
		$sourcePath = app_path('/models/' . static::$customClass);
		$customPath = storage_path('/models/' . static::$customClass . '.php');

		if (!$checkExists || !is_file($customPath))
		{
			$relations = '';

			foreach (static::all() as $field)
			{
				switch ($field->fieldType->alias)
				{
					case 'page':
					case 'pages':
						$modelName = 'Page';
						break;

					case 'option':
					case 'options':
						$modelName = 'Option';
						break;

					default:
						$modelName = null;
						break;
				}

				if ($modelName)
				{
					switch ($field->fieldType->alias)
					{
						case 'page':
						case 'option':
							$method = 'belongsTo(\'' . $modelName . '\')';
							break;

						case 'pages':
						case 'options':
							$method = 'belongsToMany(
								\'' . $field->fieldType->relationship . '\',
								\'' . PREFIX . '$_' . static::$tableCustomAlias . '_' . snake_case($field->fieldType->relationship) . '_field_' . $field->alias . '\',
								\'owner_' . static::$tableCustomAlias . '_id\',
								\'' . snake_case($field->fieldType->relationship) . '_id\'
							)';
							break;

						default:
							$method = null;
							break;
					}

					if ($method)
					{
						$relation = camel_case('field_' . preg_replace('#_id$#', '', $field->alias));
						$relations .= '
							public function ' . $relation . '()
							{
								return $this->' . $method . ';
							}
						';
					}
				}
			}

			$relations = str_replace(
				'///RELATIONS///',
				$relations,
				file_get_contents($sourcePath)
			);

			file_put_contents($customPath, $relations);
		}
	}

	public static function addColumn(Field $field)
	{
		DB::statement('
			ALTER TABLE
			' . static::$tableAlter . '
			ADD COLUMN
			field_' . $field->alias. '
			' . $field->fieldType->database_type
		);
	}

	public static function dropColumn($fieldAlias)
	{
		DB::statement('
			ALTER TABLE
			' . static::$tableAlter . '
			DROP COLUMN
			field_' . $fieldAlias
		);
	}

	public static function renameColumn(Field $field)
	{
		DB::statement('
			ALTER TABLE
			' . static::$tableAlter . '
			CHANGE COLUMN
			field_' . $field->original['alias'] . '
			field_' . $field->alias . '
			' . $field->fieldType->database_type
		);
	}

	public static function addTable(Field $field)
	{
		DB::statement('
			CREATE TABLE
			' . PREFIX . '$_' . static::$tableCustomAlias . '_' . snake_case($field->fieldType->relationship) . '_field_' . $field->alias . '
			(
				owner_' . static::$tableCustomAlias . '_id INT(11) NOT NULL,
				' . snake_case($field->fieldType->relationship) . '_id INT(11) NOT NULL,
				PRIMARY KEY (owner_' . static::$tableCustomAlias . '_id, ' . snake_case($field->fieldType->relationship) . '_id)
			)
			ENGINE = InnoDB
			DEFAULT
			CHARSET = ' . Config::get('database.connections.mysql.charset') . '
			COLLATE = ' . Config::get('database.connections.mysql.collation')
		);
	}

	public static function dropTable($fieldAlias, $relationship)
	{
		DB::statement('
			DROP TABLE
			' . PREFIX . '$_' . static::$tableCustomAlias . '_' . snake_case($relationship) . '_field_' . $fieldAlias
		);
	}

	public static function renameTable($field)
	{
		DB::statement('
			RENAME TABLE
			' . PREFIX . '$_' . static::$tableCustomAlias . '_' . snake_case($field->fieldType->relationship) . '_field_' . $field->original['alias'] . '
			TO
			' . PREFIX . '$_' . static::$tableCustomAlias . '_' . snake_case($field->fieldType->relationship) . '_field_' . $field->alias
		);
	}

}
