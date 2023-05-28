<?php

class FieldType extends Model {

	protected $table = TABLE_FIELD_TYPE;

	protected $guarded = array(
		'id',
		'created_at',
		'updated_at',
		'alias',
		'database_type',
		'relationship',
	);

	protected function rules()
	{
		return array(
			'alias' => 'required|unique:' . TABLE_FIELD_TYPE . ',alias,' . $this->id . '|regex:#^[a-z\\d_]+$#',
			'name' => 'required',
		);
	}

}
