<?php

class ModuleContent extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'content',
				'name' => 'Контент',
				'active' => true,
				'free' => true,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
