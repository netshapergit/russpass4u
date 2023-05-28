<?php

class AdminPositionsController extends AdminModelController {

	protected $modelName = 'Position';

	public $alias = 'positions';

	protected function with($itemId = null)
	{
		return array(
			'modules'
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'позиции',
			'listHeader' => 'Позиции',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'alias', 'label' => 'Алиас'),
			array('alias' => 'name', 'label' => 'Название'),
			array('alias' => 'active', 'label' => 'Активна', 'type' => 'checkbox'),
			array('alias' => 'modules', 'label' => 'Модули', 'type' => 'collection', 'url' => $this->checkAccess('modules')),
		);
	}

}
