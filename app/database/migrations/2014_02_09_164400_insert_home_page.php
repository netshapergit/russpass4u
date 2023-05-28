<?php

class InsertHomePage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$fieldTypeString = FieldType::where('alias', 'string')->firstOrFail();
		$fieldTypeHtml = FieldType::where('alias', 'html')->firstOrFail();

		$fieldHeader = new PageField;
		$fieldHeader->fieldType()->associate($fieldTypeString);
		$fieldHeader->alias = 'header';
		$fieldHeader->name = 'Заголовок';
		$fieldHeader->save();

		$fieldContent = new PageField;
		$fieldContent->fieldType()->associate($fieldTypeHtml);
		$fieldContent->alias = 'content';
		$fieldContent->name = 'Текст';
		$fieldContent->save();

		$layout = new Layout;
		$layout->alias = 'page';
		$layout->name = 'Страница';
		$layout->save();
		$layout->fields()->attach($fieldHeader);
		$layout->fields()->attach($fieldContent);

		$page = new Page;
		$page->layout()->associate($layout);
		$page->alias = '';
		$page->title = 'Главная страница';
		$page->field_header = 'Добро пожаловать';
		$page->field_content = '<p>Это наш новый сайт.</p><p>Скоро здесь появится информация.</p>';
		$page->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$fieldHeader = PageField::where('alias', 'header')->first();
		$fieldContent = PageField::where('alias', 'content')->first();

		$page = Page::where('alias', '')->first();
		if ($page)
		{
			$page->delete();
		}

		$layout = Layout::where('alias', 'page')->first();
		if ($layout)
		{
			if ($fieldHeader)
			{
				$layout->fields()->detach($fieldHeader);
			}
			if ($fieldContent)
			{
				$layout->fields()->detach($fieldContent);
			}
			$layout->delete();
		}

		if ($fieldHeader)
		{
			$fieldHeader->delete();
		}
		if ($fieldContent)
		{
			$fieldContent->delete();
		}
	}

}
