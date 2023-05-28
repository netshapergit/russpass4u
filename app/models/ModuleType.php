<?php

class ModuleType extends Model {

	public $table = TABLE_MODULE_TYPE;

	protected $guarded = array(
		'id',
		'alias',
		'created_at',
		'updated_at',
	);

	public function layouts()
	{
		return $this->hasMany('ModuleTypeLayout');
	}

	public function additions()
	{
		return $this->hasMany('ModuleTypeAddition');
	}

	public function modules()
	{
		return $this->hasMany('Module');
	}

	public function domains()
	{
		return $this->belongsToMany('Domain', TABLE_MODULE_TYPE_OF_DOMAIN);
	}

	protected function rules()
	{
		return array(
			'alias' => 'required|unique:' . TABLE_MODULE_TYPE . ',alias,' . $this->id . '|regex:#^[a-z\\d_]+$#',
			'name' => 'required',
		);
	}

	public function isAvailable()
	{
		return $this->free || in_array(DOMAIN, $this->domains->lists('name'));
	}

}
