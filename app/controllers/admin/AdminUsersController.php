<?php

class AdminUsersController extends AdminModelController {

	protected $modelName = 'User';

	public $alias = 'users';

	protected function with($itemId = null)
	{
		$with = array();

		$fields = UserField::with('fieldType')->get();

		foreach ($fields as $field)
		{
			if (in_array($field->field_type->alias, array('options', 'pages')))
			{
				$with[] = 'field' . studly_case($field->alias);
			}
		}

		return $with;
	}

	protected function getListData($itemId = null)
	{
		return array(
			// TODO active field_types only
			'fields' => UserField::with('fieldType', 'layouts', 'layouts.pages', 'selects', 'selects.options')->get()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'пользователя',
			'listHeader' => 'Пользователи',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'login', 'label' => 'Логин'),
			array('alias' => 'email', 'label' => 'E-mail'),
			array('alias' => 'active', 'label' => 'Активен', 'type' => 'checkbox'),
		);
	}

}
