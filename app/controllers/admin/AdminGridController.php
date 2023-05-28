<?php

class AdminGridController extends AdminController {

	public $alias = 'grid';

//	public function index()
//	{
//
//		return $this->view('grid.index', array(
//			'items' => $this->getPages(),
//		));
//	}
//
//	public function edit($itemId)
	public function index()
	{
		return $this->view('grid.edit', array(
			'dummy' => Module::loadDummy(),
//			'items' => $this->getPages(),
//			'item' => Page::findOrFail($itemId)->toArray(),
			'list' => $this->getListData(),
			'positions' => Position::loadNested(),
		));
	}

	protected function getPages()
	{
		$pagesController = new AdminPagesController;
		return $pagesController->items();
	}

	protected function getListData()
	{
		//$pages = Page::all()->toArray();
		$pages = Page::where('layout_id', 1)->orWhere('grid', 1)->get()->toArray();

		$imageSizes = array(
			'large',
			'medium',
			'small',
		);

		$moduleTypes = array();
		foreach (ModuleType::where('active', true)->get() as $moduleType)
		{
			if ($moduleType->isAvailable())
			{
				$moduleTypes[] = $moduleType;
			}
		}

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
				'slideshow2' => array(
					'pages' => $pages,
					'imageSizes' => $imageSizes,
				),
			),
			'layouts' => Layout::all()->toArray(),
			'moduleTypeLayouts' => ModuleTypeLayout::all()->toArray(),
			'moduleTypes' => array_values(
				ModuleType::where('active', true)
					->get()
					->filter(function($moduleType)
					{
						return $moduleType->isAvailable();
					})
					->toArray()
			),
			'pages' => $pages,
		);
	}

}
