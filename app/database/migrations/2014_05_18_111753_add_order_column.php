<?php

class AddOrderColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			Schema::table($map[TABLE_PAGE], function($table)
			{
				$table->integer('order')->after('active');
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
			Schema::table($map[TABLE_PAGE], function($table)
			{
				$table->dropColumn('order');
			});
		});
	}

}
