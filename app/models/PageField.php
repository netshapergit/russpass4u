<?php

class PageField extends AlterField {

	protected $table = TABLE_PAGE_FIELD;

	public static $tableAlter = TABLE_PAGE;

	public static $tableLayouts = TABLE_LAYOUT_OF_PAGE_FIELD;

	public static $tableSelects = TABLE_SELECT_OF_PAGE_FIELD;

	public static $tableCustomAlias = 'page';

	public static $customClass = 'PageCustom';

	public function inLayouts()
	{
		return $this->belongsToMany('Layout', TABLE_PAGE_FIELD_OF_LAYOUT)->withPivot('order', 'required');
	}

	protected function rules()
	{
		return array(
			'field_type_id' => 'required|integer|exists:' . TABLE_FIELD_TYPE . ',id',
			'alias' => 'required|unique:' . TABLE_PAGE_FIELD . ',alias,' . $this->id . '|regex:#^[a-z\\d_]+$#',
			'name' => 'required',
		);
	}

	public static function boot()
	{
		parent::boot();

		self::deleted(function($field)
		{
			DB::table(TABLE_PAGE_FIELD_OF_LAYOUT)->where('page_field_id', $field->id)->delete();
		});
	}

}
