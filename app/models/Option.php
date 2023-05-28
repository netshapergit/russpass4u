<?php

class Option extends Model {

	protected $table = TABLE_OPTION;

	public function select()
	{
		return $this->belongsTo('Select');
	}

	protected function rules()
	{
		return array(
			'select_id' => 'required|integer|exists:' . TABLE_SELECT . ',id',
			'name' => 'required',
		);
	}

}
