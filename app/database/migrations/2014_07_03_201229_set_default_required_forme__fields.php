<?php

class SetDefaultRequiredFormeFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$forme = Forme::where('alias', 'feedback')->firstOrFail();

		foreach ($forme->fields as $field)
		{
			switch ($field->alias)
			{
				case 'email':
					$field->pivot->order = 1;
					$field->pivot->required = true;
					break;
				case 'name':
					$field->pivot->order = 2;
					break;
				case 'subject':
					$field->pivot->order = 3;
					$field->pivot->required = true;
					break;
				case 'text':
					$field->pivot->order = 4;
					break;
			}

			$field->pivot->save();
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$forme = Forme::where('alias', 'feedback')->firstOrFail();

		foreach ($forme->fields as $field)
		{
			$field->pivot
				->fill(array(
					'order' => 0,
					'required' => false,
				))
				->save();
		}
	}

}
