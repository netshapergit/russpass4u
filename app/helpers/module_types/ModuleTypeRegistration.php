<?php

class ModuleTypeRegistration extends ModuleTypeHelper {

	public function setRelationship()
	{
		parent::setRelationship();

		$this->config['fields'] = UserField::all();
	}

}
