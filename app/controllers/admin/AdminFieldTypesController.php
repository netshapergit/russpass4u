<?php

class AdminFieldTypesController extends AdminModelController {

	protected $modelName = 'FieldType';

	public $alias = 'field_types';

	protected function allowCreate()
	{
		return false;
	}

	protected function allowDelete()
	{
		return false;
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'типа полей',
			'listHeader' => 'Типы полей',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'alias', 'label' => 'Алиас'),
			array('alias' => 'database_type', 'label' => 'Тип в БД'),
			array('alias' => 'relationship', 'label' => 'Связь'),
			array('alias' => 'name', 'label' => 'Название'),
			array('alias' => 'active_page', 'label' => 'Страницы', 'type' => 'checkbox'),
			array('alias' => 'active_forme', 'label' => 'Формы', 'type' => 'checkbox'),
			array('alias' => 'active_user', 'label' => 'Пользователи', 'type' => 'checkbox'),
			array('alias' => 'active_setting', 'label' => 'Настройки', 'type' => 'checkbox'),
		);
	}

}
