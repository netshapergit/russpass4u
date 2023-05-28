<?php

// TODO Module::with()
class AdminModulesController extends AdminModelController {

	protected $modelName = 'Module';

	public $alias = 'modules';

	protected function getItems($orderBy = 'id', $desc = false)
	{
		return parent::getItems($orderBy, $desc)
			->filter(function($module)
			{
				return $module->module_type->isAvailable();
			});
	}

	protected function with($itemId = null)
	{
		$with = array(
			'moduleType',
			'moduleTypeLayout',
			'position',
		);

		if ($itemId)
		{
			$with[] = 'layouts';
			$with[] = 'pages';
		}

		return $with;
	}

	protected function getListData($itemId = null)
	{
		$pages = Page::all()->toArray();

		$imageSizes = array(
			'large',
			'medium',
			'small',
		);

		return array(
			'accessLevels' => User::getAccessLevelOptions(),
			'binds' => Module::getBindOptions(),
			'custom' => array(
				'announcement' => array(
					'order_bys' => array(
						array('id' => 'created_at', 'name' => 'Дата создания'),
						array('id' => 'id', 'name' => 'ID'),
						array('id' => 'order', 'name' => 'Порядок'),
						array('id' => 'updated_at', 'name' => 'Дата обновления'),
					),
					'order_directions' => array(
						array('id' => 'asc', 'name' => 'По возрастанию'),
						array('id' => 'desc', 'name' => 'По убыванию'),
					),
					'pages' => $pages,
				),
				'banner' => array(
					'pages' => $pages,
				),
				'carousel' => array(
					'pages' => $pages,
					'imageSizes' => $imageSizes,
				),
				'form' => array(
					'formes' => Forme::all()->toArray(),
					'sizes' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11),
				),
				'gallery' => array(
					'imageSizes' => $imageSizes,
				),
				'menu' => array(
					'pages' => $pages,
				),
				'plan' => array(
					'pages' => $pages,
				),
				'slideshow' => array(
					'pages' => $pages,
					'imageSizes' => $imageSizes,
				),
			),
			'layouts' => Layout::all()->toArray(),
			'moduleTypeAdditions' => ModuleTypeAddition::all()
				->filter(function($addition)
				{
					return $addition->active && $addition->isAvailable();
				})
				->lists('alias'),
			'moduleTypeLayouts' => ModuleTypeLayout::all()->toArray(),
			'moduleTypes' => ModuleType::all()
				->filter(function($moduleType)
				{
					return $moduleType->active && $moduleType->isAvailable();
				})
				->toArray(),
			'offsets' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11),
			'pages' => $pages,
			'positions' => Position::where('active', true)->get()->toArray(),
			'sizes' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'модуля',
			'listHeader' => 'Модули',
		);
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'name', 'label' => 'Название'),
			array('alias' => 'show_name', 'label' => 'Отображать название', 'type' => 'checkbox'),
			array('alias' => 'module_type', 'label' => 'Тип модуля', 'type' => 'relation', 'url' => $this->checkAccess('module_types')),
			array('alias' => 'module_type_layout', 'label' => 'Макет модуля', 'type' => 'relation', 'url' => $this->checkAccess('module_type_layouts')),
			array('alias' => 'position', 'label' => 'Позиция', 'type' => 'relation', 'url' => $this->checkAccess('positions')),
			array('alias' => 'order', 'label' => 'Порядок'),
			array('alias' => 'bind_layouts', 'label' => 'Для макетов', 'type' => 'option', 'options' => Module::$binds),
			array('alias' => 'bind_pages', 'label' => 'Для страниц', 'type' => 'option', 'options' => Module::$binds),
			array('alias' => 'access_level', 'label' => 'Доступ', 'type' => 'option', 'options' => User::$accessLevels),
			array('alias' => 'active', 'label' => 'Активен', 'type' => 'checkbox'),
		);
	}

}
