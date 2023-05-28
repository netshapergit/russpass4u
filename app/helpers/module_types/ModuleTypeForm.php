<?php

class ModuleTypeForm extends ModuleTypeHelper {

	public $data = array(
		'sent' => false,
	);

	public function setRelationship()
	{
		parent::setRelationship();

		if (!empty($this->config['forme_id']))
		{
			$forme = Forme::with('fields')->find($this->config['forme_id']);

			if ($forme)
			{
				$forme->fields->sortBy('pivot.order');
				$this->config['forme'] = $forme;
			}
		}
	}

	public function setData()
	{
		parent::setData();

		if (!empty($this->config['forme_id']))
		{
			if ((int)Session::get('forme_id') === (int)$this->config['forme_id'])
			{
				$this->data['sent'] = true;
				Session::forget('forme_id');
			}
		}
	}

}
