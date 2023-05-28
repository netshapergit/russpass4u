<?php

class AdminLayoutsController extends AdminModelController {

	protected $modelName = 'Layout';

	public $alias = 'layouts';

	protected function with($itemId = null)
	{
		return array(
			'fields',
		);
	}

	protected function getListData($itemId = null)
	{
		return array(
			'fields' => PageField::all()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'макета',
			'listHeader' => 'Макеты',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'alias', 'label' => 'Алиас'),
			array('alias' => 'name', 'label' => 'Название'),
			array('alias' => 'structure', 'label' => 'Структура', 'type' => 'checkbox'),
			array('alias' => 'fields', 'label' => 'Поля', 'type' => 'collection', 'url' => $this->checkAccess('page_fields')),
		);
	}

}
