<?php

class UserFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			Schema::create($map[TABLE_USER_FIELD], function($table)
			{
				$table->increments('id');
				$table->integer('field_type_id')->unsigned();
				$table->string('alias')->unique();
				$table->string('name');
				$table->timestamps();
			});

			Schema::create($map[TABLE_LAYOUT_OF_USER_FIELD], function($table)
			{
				$table->integer('user_field_id')->unsigned();
				$table->integer('layout_id')->unsigned();
				$table->primary(array('user_field_id', 'layout_id'), 'layouts_of_user_fields');
			});

			Schema::create($map[TABLE_SELECT_OF_USER_FIELD], function($table)
			{
				$table->integer('user_field_id')->unsigned();
				$table->integer('select_id')->unsigned();
				$table->primary(array('user_field_id', 'select_id'), 'selects_of_user_fields');
			});
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$this->eachDomain(function($map)
		{
			Schema::drop($map[TABLE_USER_FIELD]);
			Schema::drop($map[TABLE_LAYOUT_OF_USER_FIELD]);
			Schema::drop($map[TABLE_SELECT_OF_USER_FIELD]);
		});
	}

}
