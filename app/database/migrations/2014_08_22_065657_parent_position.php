<?php

class ParentPosition extends Migration {

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
				$table->integer('parent_position_id')->unsigned()->nullable();
				$table->integer('order');
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
				$table->dropColumn('parent_position_id');
				$table->dropColumn('order');
			});
		});
	}

}
