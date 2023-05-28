<?php

class ModuleTypeAdditions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(TABLE_MODULE_TYPE_ADDITION, function($table)
		{
			$table->increments('id');
			$table->integer('module_type_id')->unsigned();
			$table->string('alias')->unique();
			$table->string('name');
			$table->boolean('active')->default(true);
			$table->timestamps();
		});

		Schema::create(TABLE_MODULE_TYPE_ADDITION_OF_DOMAIN, function($table)
		{
			$table->integer('domain_id')->unsigned();
			$table->integer('module_type_addition_id')->unsigned();
			$table->primary(array('domain_id', 'module_type_addition_id'), 'module_type_additions_of_domain');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(TABLE_MODULE_TYPE_ADDITION);
		Schema::drop(TABLE_MODULE_TYPE_ADDITION_OF_DOMAIN);
	}

}
