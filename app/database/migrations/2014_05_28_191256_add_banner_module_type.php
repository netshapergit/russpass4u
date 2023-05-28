<?php

class AddBannerModuleType extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'banner',
				'name' => 'Баннер',
				'active' => true,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
