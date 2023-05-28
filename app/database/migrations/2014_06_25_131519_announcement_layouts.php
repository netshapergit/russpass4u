<?php

class AnnouncementLayouts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$this->eachDomain(function($map)
		{
			Schema::create($map[TABLE_MODULE_TYPE_LAYOUT], function($table)
			{
				$table->increments('id');
				$table->integer('module_type_id')->unsigned();
				$table->string('alias');
				$table->string('name');
				$table->timestamps();
			});

			Schema::table($map[TABLE_MODULE], function($table)
			{
				$table->integer('module_type_layout_id')->unsigned()->nullable();
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
			Schema::drop($map[TABLE_MODULE_TYPE_LAYOUT]);

			Schema::table($map[TABLE_MODULE], function($table)
			{
				$table->dropColumn('module_type_layout_id');
			});
		});
	}

}
