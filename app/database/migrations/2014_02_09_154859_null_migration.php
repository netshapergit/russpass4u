<?php

class NullMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// common

		Schema::create(TABLE_ADMIN, function($table)
		{
			$table->increments('id');
			$table->string('login')->unique();
			$table->string('email')->unique();
			$table->string('password');
			$table->enum('role', array('superuser', 'admin', 'manager'))->default('manager');
			$table->boolean('active')->default(true);
			$table->timestamps();
		});

		Schema::create(TABLE_ALIAS, function($table)
		{
			$table->increments('id');
			$table->integer('domain_id')->unsigned();
			$table->string('name')->unique();
			$table->boolean('active')->default(true);
			$table->timestamps();
		});

		Schema::create(TABLE_DOMAIN, function($table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->boolean('active')->default(true);
			$table->timestamps();
		});

		Schema::create(TABLE_FIELD_TYPE, function($table)
		{
			$table->increments('id');
			$table->string('alias')->unique();
			$table->string('database_type');
			$table->string('relationship');
			$table->string('name');
			$table->boolean('active_page')->default(true);
			$table->boolean('active_forme')->default(true);
			$table->boolean('active_setting')->default(true);
			$table->timestamps();
		});

		Schema::create(TABLE_MODULE_TYPE, function($table)
		{
			$table->increments('id');
			$table->string('alias')->unique();
			$table->string('name');
			$table->boolean('active')->default(true);
			$table->timestamps();
		});

		Schema::create(TABLE_ADMIN_OF_DOMAIN, function($table)
		{
			$table->integer('domain_id')->unsigned();
			$table->integer('admin_id')->unsigned();
			$table->primary(array('domain_id', 'admin_id'));
		});

		// domains

		Schema::create(TABLE_FEEDBACK, function($table)
		{
			$table->increments('id');
			$table->integer('forme_id')->unsigned();
			$table->integer('page_id')->unsigned();
			$table->string('ip');
			$table->text('useragent');
			$table->boolean('sent');
			$table->text('note');
			$table->timestamps();
		});

		Schema::create(TABLE_FORME, function($table)
		{
			$table->increments('id');
			$table->string('alias')->unique();
			$table->string('name');
			$table->text('notification');
			$table->timestamps();
		});

		Schema::create(TABLE_FORME_FIELD, function($table)
		{
			$table->increments('id');
			$table->integer('field_type_id')->unsigned();
			$table->string('alias')->unique();
			$table->string('name');
			$table->timestamps();
		});

		Schema::create(TABLE_LAYOUT, function($table)
		{
			$table->increments('id');
			$table->string('alias')->unique();
			$table->string('name');
			$table->timestamps();
		});

		Schema::create(TABLE_MODULE, function($table)
		{
			$table->increments('id');
			$table->integer('module_type_id')->unsigned();
			$table->integer('position_id')->unsigned();
			$table->string('name');
			$table->boolean('show_name')->default(false);
			$table->integer('order');
			$table->boolean('active')->default(true);
			$table->mediumText('config');
			$table->timestamps();
		});

		Schema::create(TABLE_OPTION, function($table)
		{
			$table->increments('id');
			$table->integer('select_id')->unsigned();
			$table->string('name');
			$table->timestamps();
			$table->index('select_id');
		});

		Schema::create(TABLE_PAGE, function($table)
		{
			$table->increments('id');
			$table->integer('parent_page_id')->unsigned()->nullable();
			$table->integer('layout_id')->unsigned();
			$table->string('alias');
			$table->boolean('active')->default(true);
			$table->string('title');
			$table->text('keywords');
			$table->text('description');
			$table->timestamps();
			$table->index('alias');
		});

		Schema::create(TABLE_PAGE_FIELD, function($table)
		{
			$table->increments('id');
			$table->integer('field_type_id')->unsigned();
			$table->string('alias')->unique();
			$table->string('name');
			$table->timestamps();
		});

		Schema::create(TABLE_POSITION, function($table)
		{
			$table->increments('id');
			$table->string('alias')->unique();
			$table->string('name');
			$table->timestamps();
		});

		Schema::create(TABLE_SELECT, function($table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->timestamps();
		});

		Schema::create(TABLE_SETTING_FIELD, function($table)
		{
			$table->increments('id');
			$table->integer('field_type_id')->unsigned();
			$table->string('alias')->unique();
			$table->string('name');
			$table->timestamps();
		});

		Schema::create(TABLE_USER, function($table)
		{
			$table->increments('id');
			$table->string('login')->unique();
			$table->string('email')->unique();
			$table->string('password');
			$table->boolean('active')->default(true);
			$table->timestamps();
		});

		Schema::create(TABLE_FORME_FIELD_OF_FORME, function($table)
		{
			$table->integer('forme_id')->unsigned();
			$table->integer('forme_field_id')->unsigned();
			$table->primary(array('forme_field_id', 'forme_id'));
		});

		Schema::create(TABLE_LAYOUT_OF_FORME_FIELD, function($table)
		{
			$table->integer('forme_field_id')->unsigned();
			$table->integer('layout_id')->unsigned();
			$table->primary(array('forme_field_id', 'layout_id'));
		});

		Schema::create(TABLE_LAYOUT_OF_PAGE_FIELD, function($table)
		{
			$table->integer('page_field_id')->unsigned();
			$table->integer('layout_id')->unsigned();
			$table->primary(array('page_field_id', 'layout_id'));
		});

		Schema::create(TABLE_PAGE_FIELD_OF_LAYOUT, function($table)
		{
			$table->integer('layout_id')->unsigned();
			$table->integer('page_field_id')->unsigned();
			$table->primary(array('layout_id', 'page_field_id'));
		});

		Schema::create(TABLE_SELECT_OF_FORME_FIELD, function($table)
		{
			$table->integer('forme_field_id')->unsigned();
			$table->integer('select_id')->unsigned();
			$table->primary(array('forme_field_id', 'select_id'));
		});

		Schema::create(TABLE_SELECT_OF_PAGE_FIELD, function($table)
		{
			$table->integer('page_field_id')->unsigned();
			$table->integer('select_id')->unsigned();
			$table->primary(array('page_field_id', 'select_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(TABLE_ADMIN_OF_DOMAIN);
		Schema::drop(TABLE_ADMIN);
		Schema::drop(TABLE_ALIAS);
		Schema::drop(TABLE_DOMAIN);
		Schema::drop(TABLE_FIELD_TYPE);
		Schema::drop(TABLE_MODULE_TYPE);

		Schema::drop(TABLE_FORME_FIELD_OF_FORME);
		Schema::drop(TABLE_LAYOUT_OF_FORME_FIELD);
		Schema::drop(TABLE_LAYOUT_OF_PAGE_FIELD);
		Schema::drop(TABLE_PAGE_FIELD_OF_LAYOUT);
		Schema::drop(TABLE_SELECT_OF_FORME_FIELD);
		Schema::drop(TABLE_SELECT_OF_PAGE_FIELD);
		Schema::drop(TABLE_FEEDBACK);
		Schema::drop(TABLE_FORME);
		Schema::drop(TABLE_FORME_FIELD);
		Schema::drop(TABLE_LAYOUT);
		Schema::drop(TABLE_MODULE);
		Schema::drop(TABLE_OPTION);
		Schema::drop(TABLE_PAGE);
		Schema::drop(TABLE_PAGE_FIELD);
		Schema::drop(TABLE_POSITION);
		Schema::drop(TABLE_SELECT);
		Schema::drop(TABLE_SETTING_FIELD);
		Schema::drop(TABLE_USER);
	}

}
