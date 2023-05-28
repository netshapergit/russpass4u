<?php

class AdminSelectsController extends AdminModelController {

	protected $modelName = 'Select';

	public $alias = 'selects';

	protected function getText()
	{
		return array(
			'formHeader' => 'справочника',
			'listHeader' => 'Справочники',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'name', 'label' => 'Название'),
		);
	}

}
