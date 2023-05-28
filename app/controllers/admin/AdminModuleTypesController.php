<?php

class AdminModuleTypesController extends AdminModelController {

	protected $modelName = 'ModuleType';

	public $alias = 'module_types';

	protected function getText()
	{
		return array(
			'formHeader' => 'типа модулей',
			'listHeader' => 'Типы модулей',
		);
	}

	protected function allowCreate()
	{
		return false;
	}

	protected function allowDelete()
	{
		return false;
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'alias', 'label' => 'Алиас'),
			array('alias' => 'name', 'label' => 'Название'),
			array('alias' => 'free', 'label' => 'Бесплатный', 'type' => 'checkbox'),
			array('alias' => 'active', 'label' => 'Активен', 'type' => 'checkbox'),
		);
	}

}
