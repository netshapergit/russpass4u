<?php

class ActualDomain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table(TABLE_DOMAIN, function($table) {
			$table->boolean('actual');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table(TABLE_DOMAIN, function($table) {
			$table->dropColumn('actual');
		});
	}

}
