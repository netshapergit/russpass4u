<?php

abstract class UserResourceController extends UserController {

	public $alias;

	public function show($itemId)
	{
		// TODO preview in list
		return Redirect::to(URL_USER . '/' . $this->alias . '/' . $itemId . '/edit');
	}

}
