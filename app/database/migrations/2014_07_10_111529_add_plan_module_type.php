<?php

class AddPlanModuleType extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'plan',
				'name' => 'Планировка',
				'active' => true,
				'free' => false,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
