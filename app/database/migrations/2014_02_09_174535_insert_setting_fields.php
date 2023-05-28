<?php

class InsertSettingFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$fieldTypeString = FieldType::where('alias', 'string')->firstOrFail();

		$fieldName = new SettingField;
		$fieldName->fieldType()->associate($fieldTypeString);
		$fieldName->alias = 'name';
		$fieldName->name = 'Имя сайта';
		$fieldName->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		SettingField::where('alias', 'name')->delete();
	}

}
