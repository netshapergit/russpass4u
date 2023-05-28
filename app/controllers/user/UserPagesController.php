<?php

// TODO Page::with()
class UserPagesController extends UserModelController {

	protected $modelName = 'UserPage';

	public $alias = 'pages';
/**/
	public function index()
	{
		
		$user = Auth::user()->get();
		if (!$user) {
			return Redirect::to('/');
		} else {
		
		return $this->view($this->alias . '.list', array(
			'accessLevels' => User::$accessLevels,
			'actions' => $this->getActions(),
			'items' => $this->getItems(),
			'text' => $this->getText(),
		));
		}
	}
/**/
	
	public function massUpdate()
	{
		foreach (Input::get('items', array()) as $pageId => $data)
		{
			$page = Page::find($pageId);

			if ($page)
			{
				$page->fill($data)->save();
			}
		}

		return Redirect::to(URL_USER . '/' . $this->alias);
	}

	protected function with($itemId = null)
	{
		if ($itemId)
		{
			$with = array();

			$fields = PageField::with('fieldType')->get();

			foreach ($fields as $field)
			{
				if (in_array($field->field_type->alias, array('options', 'pages')))
				{
					$with[] = 'field' . studly_case($field->alias);
				}
			}
		}
		else
		{
			$with = array(
				'layout',
				'parentPage',
				'subPages',
				'user',
			);
		}

		return $with;
	}

	protected function getListData($itemId = null)
	{
		return array(
			'accessLevels' => User::getAccessLevelOptions(),
			// TODO active field_types only
			'fields' => PageField::with('fieldType', 'inLayouts', 'layouts', 'layouts.pages', 'selects', 'selects.options')->get()->toArray(),
			// TODO except self $pageId
			'layouts' => Layout::with('fields')->where('structure', 1)->get()->toArray(),
			//'layouts' => Layout::with('fields', 'pages')->get()->toArray(), убрали стриницы
			//Загружаем стуктуру для верхней страницы
			'pages' => Layout::with('fields', 'pages')->where('id', 1)->orWhere('structure', 1)->get()->toArray(),
			'users' => User::all()->toArray(),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'страницы',
			'listHeader' => 'Страницы',
		);
	}
	
	
/*
	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'title', 'label' => 'Заголовок окна'),
			array('alias' => 'parent_page', 'label' => 'Верхняя страница', 'type' => 'relation', 'url' => $this->checkAccess('pages'), 'key' => 'title'),
			array('alias' => 'alias', 'label' => 'Алиас'),
			array('alias' => 'layout', 'label' => 'Макет', 'type' => 'relation', 'url' => $this->checkAccess('layouts')),		
			//array('alias' => 'order', 'label' => 'Порядок',  'type' => 'text'),
			array('alias' => 'active', 'label' => 'Активна', 'type' => 'checkbox'),
			array('alias' => 'sub_pages', 'label' => 'Внутренние страницы', 'type' => 'collection', 'url' => $this->checkAccess('pages'), 'key' => 'title'),
			array('alias' => 'path', 'label' => ' ', 'type' => 'url', 'icon' => 'eye', 'targetBlank' => true),
		);
	}
*/
/**/
	public function items()
	{
		return $this->getItems();
	}
/*	*/
	
/*
	protected function getItems($orderBy = 'id', $desc = false)
	{
		$pages = Page::orderBy('order')
			->with('layout', 'subPages')
			->whereNull('parent_page_id')
			->orderBy('order')
			->get();

		// TODO hot fix
		$manyPages = Page::count() > 200;
		$items = $this->getNestedItems($manyPages, $pages);

		$pageIds = array();

		foreach ($items as $item)
		{
			$pageIds[] = $item['page']['id'];
		}

		$deadPages = Page::with('layout', 'subPages', 'parentPage')
			->whereNotIn('id', $pageIds)
			->get();
		$deadItems = $this->getDeadItems($deadPages);

		return array_merge($items, $deadItems);
	}

	protected function getNestedItems($manyPages, $pages, $level = 0, $items = array())
	{
		// TODO hot fix begin
		$fields = array(
			'id',
			'alias',
			'active',
			'order',
			'title',
			'path',
			'parent_page_id',
			'access_level',
		);

		if (!$manyPages) {
			$fields[] = 'subPages';
		}

		foreach ($pages as $page)
		{
			$pageFullData = $page->toArray();
			$pageData = array();
			foreach ($fields as $field)
			{
				if (array_key_exists($field, $pageFullData))
				{
					$pageData[$field] = $pageFullData[$field];
				}
			}

			if (array_key_exists('parent_page', $pageFullData) && array_key_exists('path', $pageFullData['parent_page']))
			{
				$pageData['parent_page'] = array(
					'path' => $pageFullData['parent_page']['path'],
				);
			}

			if (array_key_exists('layout', $pageFullData) && array_key_exists('name', $pageFullData['layout']))
			{
				$pageData['layout'] = array(
					'name' => $pageFullData['layout']['name'],
				);
			}
			// TODO hot fix end

			$items[] = array(
				'level' => $level,
				'page' => $pageData,
			);

			$subPages = $page->subPages->sortBy('order')->load('layout', 'parentPage', 'subPages');

			$items = $this->getNestedItems($manyPages, $subPages, $level + 1, $items);
		}

		return $items;
	}
*/

/**/
protected function getItems($orderBy = 'id', $desc = false)
	{
		$user = Auth::user()->get();
		
		$pages = Page::orderBy('order')
			->with('layout', 'subPages')
			//->whereNull('parent_page_id')
			->where('user_id', $user->id)
			->orderBy('order')
			//->take(6)
			//->simplePaginate(6);
			//->paginate(6);
			->get();

		//$items = $this->getNestedItems($pages);

		//$pageIds = array();

		$items = array();

		foreach ($pages as $page)
		{
			$items[] = array(
				//'level' => -1,
				'page' => $page->toArray(),
			);
		}

		return $items;

		/*$deadPages = Page::with('layout', 'subPages', 'parentPage')
			->whereNotIn('id', $pageIds)
			->get();
		$deadItems = $this->getDeadItems($deadPages);*/

		//return array_merge($items, $deadItems);
	}

	
/**/
/**/
	protected function getDeadItems($pages)
	{
		$deadItems = array();

		foreach ($pages as $page)
		{
			$deadItems[] = array(
				'level' => -1,
				'page' => $page->toArray(),
			);
		}

		return $deadItems;
	}
/**/
}
