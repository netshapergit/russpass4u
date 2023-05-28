<?php

abstract class AdminResourceController extends AdminController {

	public $alias;

	public function show($itemId)
	{
		// TODO preview in list
		return Redirect::to(URL_ADMIN . '/' . $this->alias . '/' . $itemId . '/edit');
	}

}
