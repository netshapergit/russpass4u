<?php

class Layout extends Model {

	protected $table = TABLE_LAYOUT;

	protected $codeAfterSave = null;

	protected $removeFileAfterSave = null;

	public $additionalFields = array(
		'code',
	);

	public function fields()
	{
		return $this->belongsToMany('PageField', TABLE_PAGE_FIELD_OF_LAYOUT)->withPivot('order', 'required');
	}

	public function pages()
	{
		return $this->hasMany('Page');
	}

	public function modules()
	{
		return $this->belongsToMany('Module', TABLE_LAYOUT_OF_MODULE);
	}

	public function getCodeAttribute()
	{
		return file_exists($this->getCodePath())
			? file_get_contents($this->getCodePath())
			: '';
	}

	protected function getCodePath($alias = null)
	{
		if (!$alias)
		{
			$alias = $this->alias;
		}

		return preg_match('#^[a-z\\d_]+$#', $alias)
			? app('path.domain') . '/allow/views/layouts/' . $alias . '.twig'
			: '';
	}

	protected function rules()
	{
		return array(
			'alias' => 'required|unique:' . TABLE_LAYOUT . ',alias,' . $this->id . '|regex:#^[a-z\\d_]+$#',
			'name' => 'required',
		);
	}

	public static function boot()
	{
		parent::boot();

		self::updating(function($layout)
		{
			if ($layout->original['alias'] != $layout->alias) {
				$layout->removeFileAfterSave = $layout->getCodePath($layout->original['alias']);
			}
		});

		self::saving(function($layout)
		{
			if (array_key_exists('code', $layout->attributes))
			{
				$layout->codeAfterSave = $layout->attributes['code'];
				unset($layout->attributes['code']);
			}
		});

		self::saved(function($layout)
		{
			if ($layout->codeAfterSave !== null)
			{
				if ($layout->getCodePath())
				{
					file_put_contents($layout->getCodePath(), $layout->codeAfterSave);
				}

				$layout->codeAfterSave = null;
			}

			if ($layout->removeFileAfterSave)
			{
				if (file_exists($layout->removeFileAfterSave))
				{
					unlink($layout->removeFileAfterSave);
				}

				$layout->removeFileAfterSave = null;
			}
		});

		self::deleting(function($layout)
		{
			if (file_exists($layout->getCodePath()))
			{
				unlink($layout->getCodePath());
			}

			DB::beginTransaction();
		});

		self::deleted(function($layout)
		{
			DB::table(TABLE_PAGE_FIELD_OF_LAYOUT)->where('layout_id', $layout->id)->delete();
			DB::table(TABLE_LAYOUT_OF_PAGE_FIELD)->where('layout_id', $layout->id)->delete();

			DB::commit();
		});
	}

}
