<?php

class InsertPositions extends Migration {

	protected $upInserts = array(

		'Position' => array(
			array(
				'alias' => 'header',
				'name' => 'Шапка',
			),
			array(
				'alias' => 'top',
				'name' => 'Верх',
			),
			array(
				'alias' => 'left',
				'name' => 'Лево',
			),
			array(
				'alias' => 'right',
				'name' => 'Право',
			),
			array(
				'alias' => 'bottom',
				'name' => 'Низ',
			),
			array(
				'alias' => 'footer',
				'name' => 'Подвал',
			),
		),

	);

	protected $downKeys = array(
		'Position' => array('alias'),
	);

}
