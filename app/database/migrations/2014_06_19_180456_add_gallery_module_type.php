<?php

class AddGalleryModuleType extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'gallery',
				'name' => 'Галерея',
				'active' => true,
				'free' => true,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
