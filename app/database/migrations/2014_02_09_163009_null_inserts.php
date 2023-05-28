<?php

class NullInserts extends Migration {

	protected $upInserts = array(

		'FieldType' => array(
			array(
				'alias' => 'string',
				'database_type' => 'VARCHAR(255)',
				'name' => 'Строка',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => true,
			),
			array(
				'alias' => 'integer',
				'database_type' => 'INT(11)',
				'name' => 'Целое число',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => true,
			),
			array(
				'alias' => 'double',
				'database_type' => 'DOUBLE',
				'name' => 'Десятичная дробь',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => true,
			),
			array(
				'alias' => 'text',
				'database_type' => 'TEXT',
				'name' => 'Текст',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => true,
			),
			array(
				'alias' => 'checkbox',
				'database_type' => 'BOOLEAN',
				'name' => 'Чекбокс',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => true,
			),
			array(
				'alias' => 'color',
				'database_type' => 'VARCHAR(7)',
				'name' => 'Цвет',
				'active_page' => true,
				'active_forme' => false,
				'active_setting' => true,
			),
			array(
				'alias' => 'money',
				'database_type' => 'DECIMAL(10,2)',
				'name' => 'Деньги',
				'active_page' => true,
				'active_forme' => false,
				'active_setting' => true,
			),
			array(
				'alias' => 'date',
				'database_type' => 'DATE',
				'name' => 'Дата',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => true,
			),
			array(
				'alias' => 'time',
				'database_type' => 'TIME',
				'name' => 'Время',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => true,
			),
			array(
				'alias' => 'datetime',
				'database_type' => 'DATETIME',
				'name' => 'Дата и время',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => true,
			),
			array(
				'alias' => 'html',
				'database_type' => 'TEXT',
				'name' => 'HTML',
				'active_page' => true,
				'active_forme' => false,
				'active_setting' => true,
			),
			array(
				'alias' => 'file',
				'database_type' => 'VARCHAR(255)',
				'name' => 'Файл',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => true,
			),
			array(
				'alias' => 'image',
				'database_type' => 'VARCHAR(255)',
				'name' => 'Изображение',
				'active_page' => true,
				'active_forme' => false,
				'active_setting' => false,
			),
			array(
				'alias' => 'link',
				'database_type' => 'TEXT',
				'name' => 'Ссылка',
				'active_page' => true,
				'active_forme' => false,
				'active_setting' => true,
			),
			array(
				'alias' => 'email',
				'database_type' => 'VARCHAR(255)',
				'name' => 'E-mail',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => true,
			),
			array(
				'alias' => 'option',
				'database_type' => 'INT(10) UNSIGNED',
				'name' => 'Опция',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => false,
			),
			array(
				'alias' => 'options',
				'name' => 'Группа опций',
				'relationship' => 'Option',
				'active_page' => true,
				'active_forme' => true,
				'active_setting' => false,
			),
			array(
				'alias' => 'page',
				'database_type' => 'INT(10) UNSIGNED',
				'name' => 'Страница',
				'active_page' => true,
				'active_forme' => false,
				'active_setting' => false,
			),
			array(
				'alias' => 'pages',
				'name' => 'Группа страниц',
				'relationship' => 'Page',
				'active_page' => true,
				'active_forme' => false,
				'active_setting' => false,
			),
		),

		'ModuleType' => array(
			array(
				'alias' => 'text',
				'name' => 'Текст',
				'active' => true,
			),
			array(
				'alias' => 'html',
				'name' => 'Форматированный текст',
				'active' => true,
			),
			array(
				'alias' => 'form',
				'name' => 'Форма',
				'active' => true,
			),
		),

	);

	protected $downKeys = array(
		'FieldType' => array('alias'),
		'ModuleType' => array('alias'),
	);

}
