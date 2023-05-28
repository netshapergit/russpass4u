<?php

class AdminFeedbacksController extends AdminModelController {

	protected $modelName = 'Feedback';

	public $alias = 'feedbacks';

	public function create() {}

	public function store() {}

	protected function with($itemId = null)
	{
		if ($itemId)
		{
			$with = array(
				'forme.fields',
				'forme.fields.fieldType',
				'forme.fields.layouts',
				'forme.fields.layouts.pages',
				'forme.fields.selects',
				'forme.fields.selects.options',
			);

			$fields = FormeField::with('fieldType')->get();

			foreach ($fields as $field)
			{
				if (in_array($field->field_type->alias, array('options', 'pages')))
				{
					$with[] = 'field' . studly_case($field->alias);
				}
			}
		}
		else
		{
			$with = array(
				'forme',
				'page',
				'user',
			);
		}

		return $with;
	}

	protected function getListData($itemId = null)
	{
		return array(
			// TODO active field_types only
			'formes' => Forme::all()->toArray(),
			'pages' => Page::all()->toArray(),
			'users' => User::all()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'запроса',
			'listHeader' => 'Запросы',
		);
	}

	protected function allowCreate()
	{
		return false;
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'created_at', 'label' => 'Дата', 'type' => 'datetime', 'format' => 'H:mm, dd.MM.yyyy'),
			array('alias' => 'user', 'label' => 'Пользователь', 'type' => 'relation', 'url' => $this->checkAccess('users'), 'key' => 'login'),
			array('alias' => 'forme', 'label' => 'Форма', 'type' => 'relation', 'url' => $this->checkAccess('formes')),
			array('alias' => 'page', 'label' => 'Страница', 'type' => 'relation', 'url' => $this->checkAccess('pages'), 'key' => 'title'),
			array('alias' => 'ip', 'label' => 'IP'),
			array('alias' => 'sent', 'label' => 'Отправлено', 'type' => 'checkbox'),
			array('alias' => 'note', 'label' => 'Заметка'),
		);
	}

}
