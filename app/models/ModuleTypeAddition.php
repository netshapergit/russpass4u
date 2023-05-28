<?php

class ModuleTypeAddition extends Model {

	public $table = TABLE_MODULE_TYPE_ADDITION;

	protected $guarded = array(
		'id',
		'module_type_id',
		'alias',
		'created_at',
		'updated_at',
	);

	public function moduleType()
	{
		return $this->belongsTo('ModuleType');
	}

	public function domains()
	{
		return $this->belongsToMany('Domain', TABLE_MODULE_TYPE_ADDITION_OF_DOMAIN);
	}

	protected function rules()
	{
		return array(
			'alias' => 'required|unique:' . TABLE_MODULE_TYPE_ADDITION . ',alias,' . $this->id . '|regex:#^[a-z\\d_]+$#',
			'module_type_id' => 'required|integer|exists:' . TABLE_MODULE_TYPE . ',id',
			'name' => 'required',
		);
	}

	public function isAvailable()
	{
		return in_array(DOMAIN, $this->domains->lists('name'));
	}

}
