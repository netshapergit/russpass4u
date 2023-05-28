<?php

class PositionDeactivation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			Schema::table($map[TABLE_POSITION], function($table)
			{
				$table->boolean('active')->default(true);
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
			Schema::table($map[TABLE_POSITION], function($table)
			{
				$table->dropColumn('active');
			});
		});
	}

}
