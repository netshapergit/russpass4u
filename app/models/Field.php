<?php

abstract class Field extends Model {

	public function fieldType()
	{
		return $this->belongsTo('FieldType');
	}

}
