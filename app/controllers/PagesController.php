<?php

class PagesController extends BaseController {

	public function show()
	{
		$domain = Domain::current();

		if (!$domain->active)
		{
			return 'Domain blocked';
		}

		if (!Meta::page())
		{
			App::abort(404);
		}

		// TODO replace code below with showNew()

		if ($domain->actual)
		{
			return $this->showNew();
		}

		// domain is not actual

		$modules = Module::with('layouts', 'moduleType', 'moduleTypeLayout', 'pages', 'position')
			->where('active', 1)
			->get();

		$blocks = array();

		foreach (Position::all() as $position)
		{
			$blocks[$position->alias] = array(
				'modules' => array(),
				'position' => $position,
			);
		}

		$modules = $modules
			->sortBy('order')
			->filter(function($module)
			{
				return $module->active
					&& $module->position
					&& $module->position->active
					&& $module->moduleType->active
					&& $module->moduleType->isAvailable()
					&& $module->isAvailable();
			});

		foreach ($modules as $module)
		{
			$blocks[$module->position->alias]['modules'][] = $module;
		}

		foreach ($blocks as &$block)
		{
			$rows = Module::calculateRows($block['modules']);

			$block['rows'] = array();

			foreach ($rows as $row)
			{
				$renders = array();

				foreach ($row as $module)
				{
					$moduleWrappedView = View::make('_.module', array(
						'content' => $module->content,
						'module' => $module,
					));

					$renders[] = $moduleWrappedView->render();
				}

				$block['rows'][] = $renders;
			}

			$block['content'] = View::make('_.position', $block)->render();
			$block['length'] = count($block['modules']);
			unset($block['modules']);
			unset($block['rows']);
		}

		return View::make('layouts.' . Meta::page()->layout->alias, array(
			'modules' => $blocks,
			'page' => Meta::page(),
			'request' => Meta::request(),
			'site' => Config::get('settings.site'),
			'system' => Config::get('settings.system'),
			'user' => Auth::user()->get(),
		));
	}

	public function showNew()
	{
		return View::make('base', array(
			'dummy' => Module::loadDummy(Meta::page(), true),
			'page' => Meta::page(),
			'positions' => Position::loadNested(Meta::page(), true),
			'request' => Meta::request(),
			'site' => Config::get('settings.site'),
			'system' => Config::get('settings.system'),
		));
	}

}
