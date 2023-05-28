<?php

class AddAnnouncementModuleType extends Migration {

	protected $upInserts = array(

		'ModuleType' => array(
			array(
				'alias' => 'announcement',
				'name' => 'Анонсы',
				'active' => true,
				'free' => true,
			),
		),

	);

	protected $downKeys = array(
		'ModuleType' => array('alias'),
	);

}
