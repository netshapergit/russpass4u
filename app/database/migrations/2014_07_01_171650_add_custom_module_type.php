<?php

class AddCustomModuleType extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'custom',
				'name' => 'Индивидуальный',
				'active' => true,
				'free' => true,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
