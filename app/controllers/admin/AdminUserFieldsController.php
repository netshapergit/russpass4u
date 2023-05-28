<?php

class AdminUserFieldsController extends AdminAlterFieldsController {

	protected $modelName = 'UserField';

	public $alias = 'user_fields';

	protected function getText()
	{
		return array(
			'formHeader' => 'поля пользователей',
			'listHeader' => 'Поля пользователей',
		);
	}

}
