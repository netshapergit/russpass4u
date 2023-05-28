<?php

class PrivateModules extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			Schema::table($map[TABLE_MODULE], function($table)
			{
				$table->boolean('private');
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
			Schema::table($map[TABLE_MODULE], function($table)
			{
				$table->dropColumn('private');
			});
		});
	}

}
