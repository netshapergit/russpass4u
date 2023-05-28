<?php

class Forme extends Model {

	protected $table = TABLE_FORME;

	public function fields()
	{
		return $this->belongsToMany('FormeField', TABLE_FORME_FIELD_OF_FORME)->withPivot('order', 'required');
	}

	protected function rules()
	{
		return array(
			'alias' => 'required|unique:' . TABLE_FORME . ',alias,' . $this->id . '|regex:#^[a-z\\d_]+$#',
			'name' => 'required',
		);
	}

	public static function boot()
	{
		parent::boot();

		self::deleting(function()
		{
			DB::beginTransaction();
		});

		self::deleted(function($forme)
		{
			DB::table(TABLE_FORME_FIELD_OF_FORME)->where('forme_id', $forme->id)->delete();

			DB::commit();
		});
	}

}
