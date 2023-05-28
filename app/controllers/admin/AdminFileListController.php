<?php

class AdminFileListController extends AdminController {

	protected $adminTypes = array(
		'templates' => 'Шаблоны',
		'styles' => 'Стили',
		'scripts' => 'Скрипты',
		'images' => 'Изображения',
	);

	protected $managerTypes = array(
		'documents' => 'Документы',
	);

	public function index()
	{
		return $this->view('files', array(
			'types' => $this->getTypesData(),
		));
	}

	protected function getTypesData()
	{
		$types = array();

		foreach ($this->getTypes() as $alias => $name)
		{
			$controllerClass = 'Admin' . studly_case($alias) . 'Controller';

			$controller = new $controllerClass;

			$types[] = array(
				'alias' => $alias,
				'files' => $controller->getFiles(),
				'name' => $name,
			);
		}

		return $types;
	}

	protected function getTypes()
	{
		$types = array();

		$admin = Auth::admin()->get();

		if ($admin)
		{
			$types = $this->managerTypes;

			if ($admin->is('admin', 'superuser'))
			{
				$types = array_merge($this->adminTypes, $types);
			}
		}

		return $types;
	}

}
