<?php

class UserFieldsOptions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			Schema::table($map[TABLE_USER_FIELD], function($table)
			{
				$table->boolean('required');
				$table->boolean('hidden');
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
			Schema::table($map[TABLE_USER_FIELD], function($table)
			{
				$table->dropColumn('required');
				$table->dropColumn('hidden');
			});
		});
	}

}
