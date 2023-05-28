<?php

class FormeField extends AlterField {

	protected $table = TABLE_FORME_FIELD;

	public static $tableAlter = TABLE_FEEDBACK;

	public static $tableLayouts = TABLE_LAYOUT_OF_FORME_FIELD;

	public static $tableSelects = TABLE_SELECT_OF_FORME_FIELD;

	public static $tableCustomAlias = 'feedback';

	public static $customClass = 'FeedbackCustom';

	public function formes()
	{
		return $this->belongsToMany('Forme', TABLE_FORME_FIELD_OF_FORME)->withPivot('order', 'required');
	}

	protected function rules()
	{
		return array(
			'field_type_id' => 'required|integer|exists:' . TABLE_FIELD_TYPE . ',id',
			'alias' => 'required|unique:' . TABLE_FORME_FIELD . ',alias,' . $this->id . '|regex:#^[a-z\\d_]+$#',
			'name' => 'required',
		);
	}

	public static function boot()
	{
		parent::boot();

		self::deleted(function($field)
		{
			DB::table(TABLE_FORME_FIELD_OF_FORME)->where('forme_field_id', $field->id)->delete();
		});
	}

}
