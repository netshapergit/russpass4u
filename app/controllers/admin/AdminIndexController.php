<?php

class AdminIndexController extends AdminController {

	public $alias = 'index';

	public function index()
	{
//		return $this->view('index.index');
		return Redirect::to(URL_ADMIN . '/pages');
	}

}
