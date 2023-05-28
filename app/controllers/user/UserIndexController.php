<?php

class UserIndexController extends UserController {

	public $alias = 'index';

	public function index()
	{
//		return $this->view('index.index');
		return Redirect::to(URL_USER . '/pages');
	}

}
