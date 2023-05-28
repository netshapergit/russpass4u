<?php

class AdminDomainsController extends AdminModelController {

	protected $modelName = 'Domain';

	public $alias = 'domains';

	protected function with($itemId = null)
	{
		return array(
			'admins',
			'aliases',
			'moduleTypes',
			'moduleTypeAdditions',
		);
	}

	protected function getListData($itemId = null)
	{
		return array(
			'admins' => Admin::where('role', '<>', 'superuser')->get()->toArray(),
			'module_types' => ModuleType::where('free', false)->get()->toArray(),
			'module_type_additions' => ModuleTypeAddition::all()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'домена',
			'listHeader' => 'Домены',
		);
	}

	protected function allowDelete()
	{
		return false;
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'name', 'label' => 'Имя'),
			array('alias' => 'aliases', 'label' => 'Алиасы', 'type' => 'collection', 'url' => $this->checkAccess('aliases')),
			array('alias' => 'active', 'label' => 'Активен', 'type' => 'checkbox'),
			array('alias' => 'actual', 'label' => 'Актуальная версия', 'type' => 'checkbox'),
			array('alias' => 'admins', 'label' => 'Админы', 'type' => 'collection', 'url' => $this->checkAccess('admins'), 'key' => 'login'),
			array('alias' => 'module_types', 'label' => 'Типы модулей', 'type' => 'collection', 'url' => $this->checkAccess('module_types')),
			array('alias' => 'module_type_additions', 'label' => 'Расширения модулей', 'type' => 'collection', 'url' => $this->checkAccess('module_type_additions')),
		);
	}

}
