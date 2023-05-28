<?php

class SettingField extends Field {

	protected $table = TABLE_SETTING_FIELD;

	protected function rules()
	{
		return array(
			'field_type_id' => 'required|integer|exists:' . TABLE_FIELD_TYPE . ',id',
			'alias' => 'required|unique:' . TABLE_SETTING_FIELD . ',alias,' . $this->id . '|regex:#^[a-z\\d_]+$#',
			'name' => 'required',
		);
	}

}
