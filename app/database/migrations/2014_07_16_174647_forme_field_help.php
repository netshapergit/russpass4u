<?php

class FormeFieldHelp extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			Schema::table($map[TABLE_FORME_FIELD], function($table)
			{
				$table->string('help');
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
			Schema::table($map[TABLE_FORME_FIELD], function($table)
			{
				$table->dropColumn('help');
			});
		});
	}

}
