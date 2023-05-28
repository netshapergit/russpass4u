<?php

class AdminPageFieldsController extends AdminAlterFieldsController {

	protected $modelName = 'PageField';

	public $alias = 'page_fields';

	protected function getText()
	{
		return array(
			'formHeader' => 'поля страниц',
			'listHeader' => 'Поля страниц',
		);
	}

}
