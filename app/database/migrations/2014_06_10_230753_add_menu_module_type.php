<?php

class AddMenuModuleType extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'menu',
				'name' => 'Меню',
				'active' => true,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
