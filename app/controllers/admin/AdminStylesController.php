<?php

class AdminStylesController extends AdminFilesController {

	public $alias = 'styles';

	protected $extension = 'css';

	protected $storage = 'public/theme/css/';

	protected $mode = 'css';

	protected $webPath = '/site/theme/css/';

	protected function getDefaultContent()
	{
		$path = public_path('domains/_/allow/public/theme/css/base.css');

		return file_exists($path)
			? file_get_contents($path)
			: parent::getDefaultContent();
	}

}
