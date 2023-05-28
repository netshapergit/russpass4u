<?php

class Select extends Model {

	protected $table = TABLE_SELECT;

	public function options()
	{
		return $this->hasMany('Option');
	}

	protected function rules()
	{
		return array(
			'name' => 'required|unique:' . TABLE_SELECT . ',name,' . $this->id,
		);
	}

	public static function boot()
	{
		parent::boot();

		self::deleting(function()
		{
			DB::beginTransaction();
		});

		self::deleted(function($select)
		{
			DB::table(TABLE_SELECT_OF_PAGE_FIELD)->where('select_id', $select->id)->delete();

			DB::commit();
		});
	}

}
