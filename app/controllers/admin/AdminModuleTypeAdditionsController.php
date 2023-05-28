<?php

class AdminModuleTypeAdditionsController extends AdminModelController {

	protected $modelName = 'ModuleTypeAddition';

	public $alias = 'module_type_additions';

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
			'formHeader' => 'дополнения модулей',
			'listHeader' => 'Дополнения модулей',
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
			array('alias' => 'module_type', 'label' => 'Тип модуля', 'type' => 'relation', 'url' => $this->checkAccess('module_types')),
			array('alias' => 'alias', 'label' => 'Алиас'),
			array('alias' => 'name', 'label' => 'Название'),
			array('alias' => 'active', 'label' => 'Активен', 'type' => 'checkbox'),
		);
	}

}
