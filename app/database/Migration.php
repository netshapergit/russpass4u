<?php

class Migration extends Illuminate\Database\Migrations\Migration {

	/**
	 * @example array('Module' => array('alias' => 'foo', 'name' => 'bar'), 'Field' => ...)
	 */
	protected $upInserts = array();

	protected $upDeletes = array();

	protected $downInserts = array();

	protected $downDeletes = array();

	/**
	 * @example array('Module' => array('alias'))
	 */
	protected $downKeys = array();

	public function up()
	{
		$this->insert($this->upInserts);
		$this->delete($this->upDeletes);
	}

	public function down()
	{
		$this->insert($this->downInserts);
		$this->delete($this->downDeletes);

		$deletes = array();
		foreach ($this->downKeys as $modelName => $keys)
		{
			$deletes[$modelName] = array();
			foreach ($this->upInserts[$modelName] as $item)
			{
				$deleteItem = array();
				foreach ($keys as $key)
				{
					$deleteItem[$key] = $item[$key];
				}
				$deletes[$modelName][] = $deleteItem;
			}
		}
		$this->delete($deletes);
	}

	protected function insert($inserts)
	{
		foreach ($inserts as $modelName => $items)
		{
			foreach ($items as $item)
			{
				$model = new $modelName;
				foreach ($item as $key => $value)
				{
					$model->$key = $value;
				}
				$model->save();
			}
		}
	}

	protected function delete($deletes)
	{
		foreach ($deletes as $modelName => $items)
		{
			foreach ($items as $item)
			{
				$query = $modelName::whereRaw('1 = 1');

				foreach ($item as $key => $value)
				{
					$query->where($key, $value);
				}

				$query->delete();
			}
		}
	}

	protected function eachDomain(callable $function, $includeNull = true)
	{
		foreach ($this->getPrefixes($includeNull) as $prefix)
		{
			$map = array();

			foreach (Config::get('database.domainTables') as $alias)
			{
				$map[PREFIX . '$'. $alias] = $prefix . '$' . $alias;
			}

			$function($map);
		}
	}

	protected function getPrefixes($includeNull = true)
	{
		$prefixes = array();

		if ($includeNull)
		{
			$prefixes[] = PREFIX;
		}

		foreach (Domain::all() as $domain)
		{
			$prefixes[] = Domain::getTablePrefix($domain->name);
		}

		return $prefixes;
	}

	protected function createField($className, $fieldTypeAlias, array $data = array())
	{
		$fieldType = FieldType::where('alias', $fieldTypeAlias)->firstOrFail();

		$field = new $className;
		$field->fieldType()->associate($fieldType);

		return $field->fill($data)->save()
			? $field
			: false;
	}

	protected function removeField($className, $alias)
	{
		$field = $className::where('alias', $alias)->first();

		if ($field)
		{
			$field->delete();
		}
	}

	protected function createFormeField($fieldTypeAlias, $data)
	{
		return $this->createField('FormeField', $fieldTypeAlias, $data);
	}

	protected function createPageField($fieldTypeAlias, $data)
	{
		return $this->createField('PageField', $fieldTypeAlias, $data);
	}

	protected function removeFormeField($alias)
	{
		$this->removeField('FormeField', $alias);
	}

	protected function removePageField($alias)
	{
		$this->removeField('PageField', $alias);
	}

	protected function createModuleTypeLayout($moduleTypeAlias, array $data = array())
	{
		$moduleType = ModuleType::where('alias', $moduleTypeAlias)->firstOrFail();

		$moduleTypeLayout = new ModuleTypeLayout;
		$moduleTypeLayout->moduleType()->associate($moduleType);

		return $moduleTypeLayout->fill($data)->save()
			? $moduleTypeLayout
			: false;
	}

	protected function removeModuleTypeLayout($alias)
	{
		$moduleTypeLayout = ModuleType::where('alias', $alias)->first();

		if ($moduleTypeLayout)
		{
			$moduleTypeLayout->delete();
		}
	}

}
