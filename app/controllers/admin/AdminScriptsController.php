<?php

class AdminScriptsController extends AdminFilesController {

	public $alias = 'scripts';

	protected $extension = 'js';

	protected $storage = 'public/theme/js/';

	protected $mode = 'javascript';

	protected $webPath = '/site/theme/js/';

	protected function getDefaultContent()
	{
		$path = public_path('domains/_/allow/public/theme/js/base.js');

		return file_exists($path)
			? file_get_contents($path)
			: parent::getDefaultContent();
	}

}
