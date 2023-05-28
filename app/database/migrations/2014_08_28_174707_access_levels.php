<?php

class AccessLevels extends Migration {

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
				$table->dropColumn('private');
				$table->enum('access_level', array('any', 'guest', 'user'))->default('any');
			});

			Schema::table($map[TABLE_PAGE], function($table)
			{
				$table->dropColumn('private');
				$table->enum('access_level', array('any', 'guest', 'user'))->default('any');
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
				$table->dropColumn('access_level');
				$table->boolean('private');
			});

			Schema::table($map[TABLE_PAGE], function($table)
			{
				$table->dropColumn('access_level');
				$table->boolean('private');
			});
		});
	}

}
