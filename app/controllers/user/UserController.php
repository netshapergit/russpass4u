<?php

abstract class UserController extends BaseController {

	public $alias;

	protected function view($view, $vars = array())
	{
		$vars = array_merge($vars, array(
			'actual' => Domain::actual(),
			'menu' => $this->getMenu(),
			'request' => Meta::request(),
			'url' => array(
				'root' => '/',
				'user' => URL_USER,
			),
			'user' => Auth::user()->get(),
		));

		$vars['vars'] = $vars;

		return View::make('_.user.' . $view, $vars);
	}

	protected function checkAccess($aliasToCheck)
	{
		$access = array(
			'user' => array(
				'index',
				'feedbacks',
				'modules',
				'options',
				'pages',
				'site',
				'users',
			),
		);

		$user = Auth::user()->get();

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

			if ($allow || $user->role == $role)
			{
				break;
			}
		}

		return $allow ? $aliasToCheck : false;
	}

	protected function getMenu()
	{
		$user = Auth::user()->get();
		
		$menu = array();

		if ($user->Auth)
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
