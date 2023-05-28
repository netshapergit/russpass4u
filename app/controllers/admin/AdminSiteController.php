<?php

class AdminSiteController extends AdminSettingsController {

	public $alias = 'site';

	protected function getListData()
	{
		return array(
			'fields' => SettingField::with('fieldType')->get()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'сайта',
		);
	}

}
