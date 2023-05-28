<?php

class ModuleAccess extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table(TABLE_MODULE_TYPE, function($table)
		{
			$table->boolean('free')->default(false);
		});

		Schema::create(TABLE_MODULE_TYPE_OF_DOMAIN, function($table)
		{
			$table->integer('domain_id')->unsigned();
			$table->integer('module_type_id')->unsigned();
			$table->primary(array('domain_id', 'module_type_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table(TABLE_MODULE_TYPE, function($table)
		{
			$table->dropColumn('free');
		});

		Schema::drop(TABLE_MODULE_TYPE_OF_DOMAIN);
	}

}
