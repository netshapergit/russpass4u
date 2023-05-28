<?php

class MoreDefaultData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// module type layouts
		$this->createModuleTypeLayout('announcement', array(
			'alias' => 'articles',
			'name' => 'Статьи',
		));
		$this->createModuleTypeLayout('announcement', array(
			'alias' => 'news',
			'name' => 'Новости',
		));
		$this->createModuleTypeLayout('announcement', array(
			'alias' => 'preview',
			'name' => 'Превью',
		));
		$this->createModuleTypeLayout('announcement', array(
			'alias' => 'blocks',
			'name' => 'Блоки',
		));

		// page fields
		$this->createPageField('text', array(
			'alias' => 'summary',
			'name' => 'Краткое описание',
		));
		$this->createPageField('image', array(
			'alias' => 'image',
			'name' => 'Изображение',
		));

		// forme fields
		$fields = array(
			$this->createFormeField('string', array(
				'alias' => 'name',
				'name' => 'Имя',
			)),
			$this->createFormeField('email', array(
				'alias' => 'email',
				'name' => 'E-mail',
			)),
			$this->createFormeField('string', array(
				'alias' => 'subject',
				'name' => 'Тема',
			)),
			$this->createFormeField('text', array(
				'alias' => 'text',
				'name' => 'Текст сообщения',
			)),
		);

		// forme
		$forme = new Forme;
		$forme
			->fill(array(
				'alias' => 'feedback',
				'name' => 'Обратная связь',
			))
			->save();

		foreach ($fields as $field)
		{
			if ($field)
			{
				$forme->fields()->attach($field);
			}
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// module type layouts
		$this->removeModuleTypeLayout('articles');
		$this->removeModuleTypeLayout('news');
		$this->removeModuleTypeLayout('preview');
		$this->removeModuleTypeLayout('blocks');

		// page fields
		$this->removePageField('summary');
		$this->removePageField('image');

		// forme
		$forme = Forme::where('alias', 'feedback')->first();

		if ($forme)
		{
			foreach ($forme->fields as $field)
			{
				$forme->fields()->detach($field);
			}

			$forme->delete();
		}

		// forme fields
		$this->removeFormeField('name');
		$this->removeFormeField('email');
		$this->removeFormeField('subject');
		$this->removeFormeField('text');
	}

}
