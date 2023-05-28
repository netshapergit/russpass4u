<?php

class AdminModuleTypeLayoutsController extends AdminModelController {

	protected $modelName = 'ModuleTypeLayout';

	public $alias = 'module_type_layouts';

	protected function with($itemId = null)
	{
		return array(
			'moduleType',
		);
	}

	protected function getListData($itemId = null)
	{
		return array(
			'moduleTypes' => ModuleType::all()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'макета модулей',
			'listHeader' => 'Макеты модулей',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'module_type', 'label' => 'Тип модуля', 'type' => 'relation', 'url' => $this->checkAccess('module_types')),
			array('alias' => 'alias', 'label' => 'Алиас'),
			array('alias' => 'name', 'label' => 'Название'),
		);
	}

}
