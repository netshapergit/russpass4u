<?php

class AdminFieldsController extends AdminModelController {

	protected function with($itemId = null)
	{
		return array(
			'fieldType',
		);
	}

	protected function getListData($itemId = null)
	{
		$activeField = preg_replace('#(\w+)_fields$#', 'active_$1', $this->alias);

		return array(
			'fieldTypes' => FieldType::where($activeField, true)->get()->toArray(),
			'layouts' => Layout::all()->toArray(),
			'selects' => Select::all()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'поля',
			'listHeader' => 'Поля',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'field_type', 'label' => 'Тип поля', 'type' => 'relation', 'url' => $this->checkAccess('field_types')),
			array('alias' => 'alias', 'label' => 'Алиас'),
			array('alias' => 'name', 'label' => 'Название'),
		);
	}

}
