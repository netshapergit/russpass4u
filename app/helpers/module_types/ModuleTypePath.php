<?php

class ModuleTypePath extends ModuleTypeHelper {

	public function setRelationship()
	{
		parent::setRelationship();

		if (Meta::page())
		{
			$this->config['pages'] = Meta::page()->parents;
		}
	}

}
