<?php

class AdminDocumentsController extends AdminFilesController {

	public $alias = 'documents';

	protected $availableExtensions = array(
		'7z',
		'doc',
		'docx',
		'gif',
		'jpg',
		'odt',
		'pdf',
		'png',
		'ppt',
		'pptx',
		'rar',
		'xls',
		'xlsx',
		'zip',
	);

	protected $storage = 'public/data/documents/';

	protected $webPath = '/site/data/documents/';

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
