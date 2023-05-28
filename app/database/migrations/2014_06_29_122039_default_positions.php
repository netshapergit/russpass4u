<?php

class DefaultPositions extends Migration {

	protected $upInserts = array(

		'Position' => array(
			array('alias' => 'highest', 'name' => 'Самый верх', 'active' => true),
			array('alias' => 'header', 'name' => 'Шапка', 'active' => true),
			array('alias' => 'top', 'name' => 'Вверху', 'active' => true),
			array('alias' => 'verso', 'name' => 'Левая сторона', 'active' => true),
			array('alias' => 'above', 'name' => 'Над контентом', 'active' => true),
			array('alias' => 'left', 'name' => 'Слева', 'active' => true),
			array('alias' => 'pre', 'name' => 'Перед контентом', 'active' => true),
			array('alias' => 'post', 'name' => 'После контента', 'active' => true),
			array('alias' => 'right', 'name' => 'Справа', 'active' => true),
			array('alias' => 'below', 'name' => 'Под контентом', 'active' => true),
			array('alias' => 'recto', 'name' => 'Правая сторона', 'active' => true),
			array('alias' => 'bottom', 'name' => 'Внизу', 'active' => true),
			array('alias' => 'footer', 'name' => 'Подвал', 'active' => true),
			array('alias' => 'lowest', 'name' => 'Самый низ', 'active' => true),
			array('alias' => 'dummy', 'name' => 'Скрыто', 'active' => true),
		),

	);

	protected $downKeys = array(
		'Position' => array('alias'),
	);

	protected $downInserts = array(

		'Position' => array(
			array('alias' => 'header', 'name' => 'Шапка'),
			array('alias' => 'top', 'name' => 'Верх'),
			array('alias' => 'left', 'name' => 'Лево'),
			array('alias' => 'right', 'name' => 'Право'),
			array('alias' => 'bottom', 'name' => 'Низ'),
			array('alias' => 'footer', 'name' => 'Подвал'),
			array('alias' => 'dummy', 'name' => 'Скрипты'),
		),

	);

	protected $upKeys = array(
		'Position' => array('alias'),
	);

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table(TABLE_POSITION)->truncate();

		parent::up();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table(TABLE_POSITION)->truncate();

		parent::down();
	}

}
