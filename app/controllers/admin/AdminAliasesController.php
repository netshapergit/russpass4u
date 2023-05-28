<?php

class AdminAliasesController extends AdminModelController {

	protected $modelName = 'Alias';

	public $alias = 'aliases';

	protected function with($itemId = null)
	{
		return array(
			'domain',
		);
	}

	protected function getListData($itemId = null)
	{
		return array(
			'domains' => Domain::all()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'алиаса',
			'listHeader' => 'Алиасы',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'name', 'label' => 'Имя'),
			array('alias' => 'domain', 'label' => 'Домен', 'type' => 'relation', 'url' => $this->checkAccess('domains')),
			array('alias' => 'active', 'label' => 'Активен', 'type' => 'checkbox'),
		);
	}

}
