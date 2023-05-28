<?php

class AddSlideshowModuleType extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'slideshow',
				'name' => 'Слайдшоу',
				'active' => true,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
