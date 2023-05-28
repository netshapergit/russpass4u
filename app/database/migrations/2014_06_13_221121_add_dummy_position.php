<?php

class AddDummyPosition extends Migration {

	protected $upInserts = array(

		'Position' => array(
			array(
				'alias' => 'dummy',
				'name' => 'Скрипты',
			),
		),

	);

	protected $downKeys = array(
		'Position' => array('alias'),
	);

}
