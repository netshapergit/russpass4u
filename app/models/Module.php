<?php

class Module extends Model {

	protected $table = TABLE_MODULE;

	public $additionalFields = array(
		'content',
	);

	public static $binds = array(
		'all' => 'Все',
		'except' => 'Кроме выбранных',
		'for' => 'Только выбранные',
	);

	public function moduleType()
	{
		return $this->belongsTo('ModuleType');
	}

	public function moduleTypeLayout()
	{
		return $this->belongsTo('ModuleTypeLayout');
	}

	public function position()
	{
		return $this->belongsTo('Position');
	}

	public function layouts()
	{
		return $this->belongsToMany('Layout', TABLE_LAYOUT_OF_MODULE);
	}

	public function pages()
	{
		return $this->belongsToMany('Page', TABLE_PAGE_OF_MODULE);
	}

	public function getConfigAttribute($value)
	{
		return $value ? json_decode($value, true) : array();
	}

	public function setConfigAttribute($value)
	{
		$this->attributes['config'] = json_encode($value);
	}

	public function getCleanConfigAttribute()
	{
		return isset($this->config[$this->moduleType->alias]) ?
			$this->config[$this->moduleType->alias] : array();
	}

	public function getContentAttribute()
	{
		try
		{
			$config = $this->cleanConfig;
			$data = array();

			$helperClass = 'ModuleType' . studly_case($this->moduleType->alias);
			if (class_exists($helperClass))
			{
				$helper = new $helperClass($config);
				$config = $helper->config;
				$data = $helper->data;
			}

			$viewPath = $this->moduleTypeLayout
				? 'module_types.' . $this->moduleType->alias . '.' . $this->moduleTypeLayout->alias
				: '_.module_types.' . $this->moduleType->alias . '.main';

			$view = View::make($viewPath, array(
				'config' => $config,
				'data' => $data,
				'page' => Meta::page(),
				'request' => Meta::request(),
				'site' => Config::get('settings.site'),
				'system' => Config::get('settings.system'),
				'user' => Auth::user()->get(),
			));

			return $view->render();
		}
		catch (Exception $e)
		{
			if (Config::get('app.debug'))
			{
				throw $e;
			}

			return null;
		}
	}

	protected function rules()
	{
		return array(
			'module_type_id' => 'required|integer|exists:' . TABLE_MODULE_TYPE . ',id',
			'module_type_layout_id' => 'integer|exists:' . TABLE_MODULE_TYPE_LAYOUT . ',id',
			'position_id' => 'integer|exists:' . TABLE_POSITION . ',id',
			'order' => 'numeric',
			'bind_layouts' => 'required|in:all,except,for',
			'bind_pages' => 'required|in:all,except,for',
		);
	}

	public function isAvailable(Page $page = null, User $user = null)
	{
		return $this->isAvailableUser($user)
			&& $this->isAvailablePage($page);
	}

	public function isAvailableUser(User $user = null)
	{
		if (!$user)
		{
			$user = Auth::user()->get();
		}

		switch ($this->access_level)
		{
			case 'any':
				return true;

			case 'guest':
				return !$user;

			case 'user':
				return (bool)$user;
		}
	}

	public function isAvailablePage(Page $page = null)
	{
		if (!$page)
		{
			$page = Meta::page();
		}

		if (!$page)
		{
			return false;
		}

		$inLayouts = in_array($page->layout_id, $this->layouts->lists('id'));
		$inPages = in_array($page->id, $this->pages->lists('id'));

		switch ($this->bind_layouts . '_' . $this->bind_pages)
		{
			case 'all_all':
				return true;
			case 'all_except':
				return !$inPages;
			case 'all_for':
				return $inPages;
			case 'except_all':
				return !$inLayouts;
			case 'except_except':
				return !$inLayouts && !$inPages;
			case 'except_for':
				return !$inLayouts || $inPages;
			case 'for_all':
				return $inLayouts;
			case 'for_except':
				return $inLayouts && !$inPages;
			case 'for_for':
				return $inLayouts || $inPages;
			default:
				return false;
		}
	}

	public static function getBinds()
	{
		return array_keys(self::$binds);
	}

	public static function getBindOptions()
	{
		$options = array();

		foreach (self::$binds as $key => $value)
		{
			$options[] = array(
				'id' => $key,
				'name' => $value,
			);
		}

		return $options;
	}

	public static function calculateRows($modules)
	{
		$rows = array();
		$row = array();

		foreach ($modules as $module)
		{
			if ($module->in_a_row)
			{
				if ($module->new_row)
				{
					$rows[] = $row;
					$row = array();
				}

				$row[] = $module;
			}
			else
			{
				if ($row)
				{
					$rows[] = $row;
					$row = array();
				}

				$rows[] = array($module);
			}
		}

		if ($row)
		{
			$rows[] = $row;
		}

		return $rows;
	}

	public static function loadDummy(Page $page = null, $active = false)
	{
		$result = array();

		$modules = Module::with('moduleType')
			// TODO where null
			->whereNull('position_id')
			->orderBy('order')
			->get();

		foreach ($modules as $module)
		{
			if ((!$active || $module->active)
				&& (!$page || $module->isAvailable($page))
				&& $module->module_type
				&& $module->module_type->active
				&& $module->module_type->isAvailable()
			) {
				$result[] = $module->toArray();
			}
		}

		return $result;
	}

	public static function boot()
	{
		parent::boot();

		self::saving(function($module)
		{
			if (array_key_exists('before_id', $module->attributes))
			{
				$before = Module::find($module->attributes['before_id']);

				if ($before)
				{
					$module->position_id = $before->position_id;
					$module->order = $before->order;

					$query = DB::table(TABLE_MODULE);

					if ($before->position_id)
					{
						$query->where('position_id', $before->position_id);
					}
					else
					{
						$query->whereNull('position_id');
					}

					$query
						->where('order', '>=', $before->order)
						->increment('order');
				}
				else
				{
					$maxOrder = DB::table(TABLE_MODULE)
						->where('position_id', $module->position_id)
						->max('order');

					$module->order = $maxOrder + 1;
				}

				unset($module->attributes['before_id']);
			}
		});
	}

}
