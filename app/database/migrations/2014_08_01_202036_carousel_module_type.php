<?php

class CarouselModuleType extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'carousel',
				'name' => 'Карусель',
				'active' => true,
				'free' => false,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
