<?php

class RegistrationModuleType extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'registration',
				'name' => 'Регистрация',
				'active' => true,
				'free' => false,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
