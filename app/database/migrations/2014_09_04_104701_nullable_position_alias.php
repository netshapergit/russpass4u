<?php

class NullablePositionAlias extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			DB::statement('ALTER TABLE ' . $map[TABLE_POSITION] . ' MODIFY alias VARCHAR(255)');

			Schema::table($map[TABLE_POSITION], function($table)
			{
				$table->dropUnique('_$positions_alias_unique');
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
			DB::statement('ALTER TABLE ' . $map[TABLE_POSITION] . ' MODIFY alias VARCHAR(255) NOT NULL');

			Schema::table($map[TABLE_POSITION], function($table)
			{
				$table->unique('alias');
			});
		});
	}

}
