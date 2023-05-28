<?php

class NullablePosition extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			DB::statement('ALTER TABLE ' . $map[TABLE_MODULE] . ' MODIFY position_id INT(10) UNSIGNED');
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
			DB::statement('ALTER TABLE ' . $map[TABLE_MODULE] . ' MODIFY position_id INT(10) UNSIGNED NOT NULL');
		});
	}

}
