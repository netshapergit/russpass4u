<?php

class AdminImagesController extends AdminFilesController {

	public $alias = 'images';

	protected $availableExtensions = array(
		'gif',
		'ico',
		'jpg',
		'png',
	);

	protected $storage = 'public/theme/images/';

	protected $webPath = '/site/theme/images/';

	public function edit($itemId)
	{
		if (!$this->exists($itemId))
		{
			App::abort(404);
		}

		return $this->view($this->alias . '.file', array(
			'item' => array(
				'id' => $itemId,
				'name' => $this->getName($itemId),
				'extension' => $this->getExtension($itemId),
				'path' => $this->webPath,
			),
			'items' => $this->getFiles(),
		));
	}

}
