<?php

class AdminOptionsController extends AdminModelController {

	protected $modelName = 'Option';

	public $alias = 'options';

	protected function with($itemId = null)
	{
		return array(
			'select',
		);
	}

	protected function getListData($itemId = null)
	{
		return array(
			'selects' => Select::all()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'опции',
			'listHeader' => 'Опции',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'name', 'label' => 'Название'),
			array('alias' => 'select', 'label' => 'Справочник', 'type' => 'relation', 'url' => $this->checkAccess('selects')),
		);
	}

}
