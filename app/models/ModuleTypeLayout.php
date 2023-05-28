<?php

class ModuleTypeLayout extends Model {

	public $table = TABLE_MODULE_TYPE_LAYOUT;

	protected $codeAfterSave = null;

	protected $removeFileAfterSave = null;

	public $additionalFields = array(
		'code',
	);

	public function moduleType()
	{
		return $this->belongsTo('ModuleType');
	}

	public function modules()
	{
		return $this->hasMany('Module');
	}

	public function getCodeAttribute()
	{
		return file_exists($this->getCodePath())
			? file_get_contents($this->getCodePath())
			: '';
	}

	protected function rules()
	{
		return array(
			'alias' => 'required|regex:#^[a-z\\d_]+$#',
			'module_type_id' => 'required|integer|exists:' . TABLE_MODULE_TYPE . ',id',
			'name' => 'required',
		);
	}

	protected function getCodePath($moduleTypeAlias = null, $alias = null)
	{
		if (!$moduleTypeAlias)
		{
			$moduleTypeAlias = $this->moduleType
				? $this->moduleType->alias
				: '';
		}

		if (!$alias)
		{
			$alias = $this->alias;
		}

		return $moduleTypeAlias && preg_match('#^[a-z\\d_]+$#', $alias)
			? app('path.domain') . '/allow/views/module_types/' . $moduleTypeAlias . '/' . $alias . '.twig'
			: '';
	}

	protected function getCodeDirPath()
	{
		return preg_replace('#(/[^/]+)$#', '', $this->getCodePath());
	}

	public static function boot()
	{
		parent::boot();

		self::updating(function($moduleTypeLayout)
		{
			if ($moduleTypeLayout->original['module_type_id'] != $moduleTypeLayout->module_type_id
				|| $moduleTypeLayout->original['alias'] != $moduleTypeLayout->alias
			) {
				$moduleType = ModuleType::find($moduleTypeLayout->original['module_type_id']);

				if ($moduleType)
				{
					$moduleTypeLayout->removeFileAfterSave = $moduleTypeLayout->getCodePath(
						$moduleType->alias,
						$moduleTypeLayout->original['alias']
					);
				}
			}
		});

		self::saving(function($moduleTypeLayout)
		{
			if (array_key_exists('code', $moduleTypeLayout->attributes))
			{
				$moduleTypeLayout->codeAfterSave = $moduleTypeLayout->attributes['code'];
				unset($moduleTypeLayout->attributes['code']);
			}
		});

		self::saved(function($moduleTypeLayout)
		{
			$moduleTypeLayout->load('moduleType');

			if ($moduleTypeLayout->codeAfterSave !== null)
			{
				if ($moduleTypeLayout->getCodePath())
				{
					if (!is_dir($moduleTypeLayout->getCodeDirpath()))
					{
						mkdir($moduleTypeLayout->getCodeDirpath());
					}

					file_put_contents($moduleTypeLayout->getCodePath(), $moduleTypeLayout->codeAfterSave);
				}

				$moduleTypeLayout->codeAfterSave = null;
			}

			if ($moduleTypeLayout->removeFileAfterSave)
			{
				if (file_exists($moduleTypeLayout->removeFileAfterSave))
				{
					unlink($moduleTypeLayout->removeFileAfterSave);
				}

				$moduleTypeLayout->removeFileAfterSave = null;
			}
		});

		self::deleted(function($moduleTypeLayout)
		{
			if (file_exists($moduleTypeLayout->getCodePath()))
			{
				unlink($moduleTypeLayout->getCodePath());
			}
		});
	}

}
