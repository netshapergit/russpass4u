<?php

class NewSlideshow extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'slideshow2',
				'name' => 'Слайдшоу 2',
				'active' => true,
				'free' => false,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
