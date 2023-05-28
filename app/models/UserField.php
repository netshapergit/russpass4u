<?php

class UserField extends AlterField {

	protected $table = TABLE_USER_FIELD;

	public static $tableAlter = TABLE_USER;

	public static $tableLayouts = TABLE_LAYOUT_OF_USER_FIELD;

	public static $tableSelects = TABLE_SELECT_OF_USER_FIELD;

	public static $tableCustomAlias = 'user';

	public static $customClass = 'UserCustom';

	protected function rules()
	{
		return array(
			'field_type_id' => 'required|integer|exists:' . TABLE_FIELD_TYPE . ',id',
			'alias' => 'required|unique:' . TABLE_USER_FIELD . ',alias,' . $this->id . '|regex:#^[a-z\\d_]+$#',
			'name' => 'required',
		);
	}

}
