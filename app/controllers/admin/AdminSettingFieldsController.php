<?php

class AdminSettingFieldsController extends AdminFieldsController {

	protected $modelName = 'SettingField';

	public $alias = 'setting_fields';

	protected function getText()
	{
		return array(
			'formHeader' => 'поля настроек',
			'listHeader' => 'Поля настроек',
		);
	}

}
