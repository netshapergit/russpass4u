<?php

class AdminFormesController extends AdminModelController {

	protected $modelName = 'Forme';

	public $alias = 'formes';

	protected function with($itemId = null)
	{
		return array(
			'fields',
		);
	}

	protected function getListData($itemId = null)
	{
		return array(
			'fields' => FormeField::all()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'формы',
			'listHeader' => 'Формы',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'alias', 'label' => 'Алиас'),
			array('alias' => 'name', 'label' => 'Название'),
			array('alias' => 'fields', 'label' => 'Поля', 'type' => 'collection', 'url' => $this->checkAccess('forme_fields')),
		);
	}

}
