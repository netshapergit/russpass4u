<?php

class ModulesInARow extends Migration {

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
				$table->boolean('in_a_row')->default(false);
				$table->boolean('new_row')->default(false);
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
				$table->dropColumn('in_a_row');
				$table->dropColumn('new_row');
			});
		});
	}

}
