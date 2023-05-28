<?php

class AddColumnRememberToken extends Migration {

	protected $userTables = array(
		TABLE_USER,
		TABLE_ADMIN
	);

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		foreach ($this->userTables as $table)
		{
			Schema::table($table, function($table)
			{
				$table->string('remember_token')->nullable();
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		foreach ($this->userTables as $table)
		{
			Schema::table($table, function($table)
			{
				$table->dropColumn('remember_token');
			});
		}
	}

}
