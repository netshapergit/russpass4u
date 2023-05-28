<?php

class AuthModuleType extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'auth',
				'name' => 'Аутентификация',
				'active' => true,
				'free' => false,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
