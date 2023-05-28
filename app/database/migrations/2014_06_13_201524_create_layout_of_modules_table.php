<?php

class CreateLayoutOfModulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			Schema::create($map[TABLE_LAYOUT_OF_MODULE], function($table)
			{
				$table->integer('module_id')->unsigned();
				$table->integer('layout_id')->unsigned();
				$table->primary(array('module_id', 'layout_id'));
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
			Schema::drop($map[TABLE_LAYOUT_OF_MODULE]);
		});
	}

}
