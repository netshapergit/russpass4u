<?php

class FormeUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			Schema::table($map[TABLE_FEEDBACK], function($table)
			{
				$table->integer('user_id')->unsigned()->nullable();
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
			Schema::table($map[TABLE_FEEDBACK], function($table)
			{
				$table->dropColumn('user_id');
			});
		});
	}

}
