<?php

abstract class AdminController extends BaseController {

	public $alias;

	protected function view($view, $vars = array())
	{
		$vars = array_merge($vars, array(
			'actual' => Domain::actual(),
			'menu' => $this->getMenu(),
			'request' => Meta::request(),
			'url' => array(
				'root' => '/',
				'admin' => URL_ADMIN,
			),
			'user' => Auth::admin()->get(),
		));

		$vars['vars'] = $vars;

		return View::make('_.admin.' . $view, $vars);
	}

	protected function checkAccess($aliasToCheck)
	{
		$access = array(
			'manager' => array(
				'index',
				'feedbacks',
				'modules',
				'options',
				'pages',
				'site',
				'users',
			),
			'admin' => array(
				'files',
				'forme_fields',
				'formes',
				'grid',
				'images',
				'layouts',
				'module_type_layouts',
				'page_fields',
				'positions',
				'scripts',
				'selects',
				'setting_fields',
				'styles',
				'system',
				'templates',
				'user_fields',
			),
			'superuser' => array(
				'admins',
				'aliases',
				'domains',
				'field_types',
				'module_types',
				'module_type_additions',
			),
		);

		$admin = Auth::admin()->get();

		$allow = false;

		foreach ($access as $role => $aliases)
		{
			foreach ($aliases as $alias)
			{
				if ($alias == $aliasToCheck)
				{
					$allow = true;
					break;
				}
			}

			if ($allow || $admin->role == $role)
			{
				break;
			}
		}

		return $allow ? $aliasToCheck : false;
	}

	protected function getMenu()
	{
		$admin = Auth::admin()->get();

		$menu = array();

		if ($admin->is('admin', 'superuser'))
		{
			$moduleSubMenu = array(
				array('alias' => 'module_type_layouts', 'label' => 'Макеты модулей'),
			);

			if (Domain::actual())
			{
				$moduleSubMenu[] = array('alias' => 'grid', 'label' => 'Модули');
			}
			else
			{
				$moduleSubMenu[] = array('alias' => 'positions', 'label' => 'Позиции');
				$moduleSubMenu[] = array('alias' => 'modules', 'label' => 'Модули');
			}

			$menu = array(
				array('alias' => 'files', 'label' => ' Файлы'),
				array(
					'label' => 'Справочники',
					'items' => array(
						array('alias' => 'selects', 'label' => 'Справочники'),
						array('alias' => 'options', 'label' => 'Опции'),
					),
				),
				array(
					'label' => 'Страницы',
					'items' => array(
						array('alias' => 'page_fields', 'label' => 'Поля страниц'),
						array('alias' => 'layouts', 'label' => 'Макеты'),
						array('alias' => 'pages', 'label' => 'Страницы'),
					),
				),
				array(
					'label' => 'Формы',
					'items' => array(
						array('alias' => 'forme_fields', 'label' => 'Поля форм'),
						array('alias' => 'formes', 'label' => 'Формы'),
						array('alias' => 'feedbacks', 'label' => 'Запросы'),
					),
				),
				array(
					'label' => 'Модули',
					'items' => $moduleSubMenu,
				),
				array(
					'label' => 'Пользователи',
					'items' => array(
						array('alias' => 'user_fields', 'label' => 'Поля пользователей'),
						array('alias' => 'users', 'label' => 'Пользователи'),
					),
				),
				array(
					'label' => 'Настройки',
					'items' => array(
						array('alias' => 'setting_fields', 'label' => 'Поля настроек'),
						array('alias' => 'site', 'label' => 'Настройки сайта'),
						array('alias' => 'system', 'label' => 'Настройки системы'),
					),
				),
			);

			if ($admin->is('superuser'))
			{
				array_unshift(
					$menu,
					array(
						'label' => 'Доступ',
						'items' => array(
							array('alias' => 'admins', 'label' => 'Админы'),
							array('alias' => 'domains', 'label' => 'Домены'),
							array('alias' => 'aliases', 'label' => 'Алиасы'),
						),
					),
					array(
						'label' => 'Типы',
						'items' => array(
							array('alias' => 'field_types', 'label' => 'Типы полей'),
							array('alias' => 'module_types', 'label' => 'Типы модулей'),
							array('alias' => 'module_type_additions', 'label' => 'Расширения модулей'),
						),
					)
				);
			}
		}
		else
		{
			$menu[] = array('alias' => 'files', 'label' => ' Файлы');

			if (Select::count() > 0)
			{
				$menu[] = array('alias' => 'options', 'label' => 'Опции');
			}

			if (Layout::count() > 0)
			{
				$menu[] = array('alias' => 'pages', 'label' => 'Страницы');
			}

			if (Forme::count() > 0)
			{
				$menu[] = array('alias' => 'feedbacks', 'label' => 'Запросы');
			}

			if (Position::where('active', true)->count() > 0)
			{
				$menu[] = array('alias' => Domain::actual() ? 'grid' : 'modules', 'label' => 'Модули');
			}

			$menu[] = array('alias' => 'users', 'label' => 'Пользователи');

			if (SettingField::count() > 0)
			{
				$menu[] = array('alias' => 'site', 'label' => 'Настройки сайта');
			}
		}

		return $menu;
	}

}
