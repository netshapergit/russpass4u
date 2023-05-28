<?php

class ActiveUserFieldType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table(TABLE_FIELD_TYPE, function($table)
		{
			$table->boolean('active_user')->default(true);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table(TABLE_FIELD_TYPE, function($table)
		{
			$table->dropColumn('active_user');
		});
	}

}
