<?php

class Position extends Model {

	protected $table = TABLE_POSITION;

	public function parentPosition()
	{
		return $this->belongsTo('Position');
	}

	public function subPositions()
	{
		return $this->hasMany('Position', 'parent_position_id');
	}

	public function modules()
	{
		return $this->hasMany('Module');
	}

	protected function rules()
	{
		return array(
			'alias' => /*'unique:' . TABLE_POSITION . ',alias,' . $this->id . '|' .*/ 'regex:#^[a-z\\d_]+$#',
		);
	}

	public static function loadNested(Page $page = null, $active = false)
	{
		$positions = Position::with('subPositions')
			->where('parent_position_id', null)
			->orderBy('order')
			->get();

		$result = array();

		foreach ($positions as $position)
		{
			if (!$active || $position->active)
			{
				$positionData = self::toArrayWithSubPositions($position, $page, $active);

				if ($positionData)
				{
					$result[] = $positionData;
				}
			}
		}

		return $result;
	}

	protected static function toArrayWithSubPositions(Position $position, Page $page = null, $active = false)
	{
		$empty = true;

		$position->load('modules', 'modules.layouts', 'modules.moduleType', 'modules.moduleTypeLayout', 'modules.pages');

		$subPositions = array();

		foreach ($position->sub_positions->sortBy('order') as $subPosition)
		{
			if (!$active || $subPosition->active) {
				$subPositionData = self::toArrayWithSubPositions($subPosition, $page, $active);

				if ($subPositionData)
				{
					$subPositions[] = $subPositionData;
					$empty = false;
				}
			}
		}

		$modules = array();

		foreach ($position->modules->sortBy('order') as $module)
		{
			if ((!$active || $module->active)
				&& (!$page || $module->isAvailable($page))
				&& $module->module_type
				&& $module->module_type->active
				&& $module->module_type->isAvailable()
			) {
				$modules[] = $module->toArray();
				$empty = false;
			}
		}

		$result = $position->toArray();
		$result['sub_positions'] = $subPositions;
		$result['modules'] = $modules;

		return $active && $empty
			? null
			: $result;
	}

	public static function boot()
	{
		parent::boot();

		self::saving(function($position)
		{
			if (array_key_exists('before_id', $position->attributes))
			{
				$before = Position::find($position->attributes['before_id']);

				if ($before)
				{
					$position->parent_position_id = $before->parent_position_id;
					$position->order = $before->order;

					$query = DB::table(TABLE_POSITION);

					if ($before->parent_position_id)
					{
						$query->where('parent_position_id', $before->parent_position_id);
					}
					else
					{
						$query->whereNull('parent_position_id');
					}

					$query
						->where('order', '>=', $before->order)
						->increment('order');
				}
				else
				{
					$maxOrder = DB::table(TABLE_POSITION)
						->where('parent_position_id', $position->parent_position_id)
						->max('order');

					$position->order = $maxOrder + 1;
				}

				unset($position->attributes['before_id']);
			}
		});
	}

}
