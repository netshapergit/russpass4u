<?php

class AdminFormeFieldsController extends AdminAlterFieldsController {

	protected $modelName = 'FormeField';

	public $alias = 'forme_fields';

	protected function getText()
	{
		return array(
			'formHeader' => 'поля форм',
			'listHeader' => 'Поля форм',
		);
	}

}
