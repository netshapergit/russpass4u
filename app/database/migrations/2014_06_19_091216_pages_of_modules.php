<?php

class PagesOfModules extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$binds = array(
			'all',
			'except',
			'for',
		);

		$this->eachDomain(function($map) use ($binds)
		{
			Schema::create($map[TABLE_PAGE_OF_MODULE], function($table)
			{
				$table->integer('module_id')->unsigned();
				$table->integer('page_id')->unsigned();
				$table->primary(array('module_id', 'page_id'));
			});

			Schema::table($map[TABLE_MODULE], function($table) use ($binds)
			{
				$table->enum('bind_layouts', $binds)->default('all');
				$table->enum('bind_pages', $binds)->default('all');
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
			Schema::drop($map[TABLE_PAGE_OF_MODULE]);

			Schema::table($map[TABLE_MODULE], function($table)
			{
				$table->dropColumn('bind_layouts');
				$table->dropColumn('bind_pages');
			});
		});
	}

}
