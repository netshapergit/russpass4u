<?php

class FormeFieldsOfFormesAttributes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			Schema::table($map[TABLE_FORME_FIELD_OF_FORME], function($table)
			{
				$table->boolean('required')->default(false);
				$table->integer('order')->default(0);
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
			Schema::table($map[TABLE_FORME_FIELD_OF_FORME], function($table)
			{
				$table->dropColumn('required');
				$table->dropColumn('order');
			});
		});
	}

}
