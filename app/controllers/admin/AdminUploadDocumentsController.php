<?php

class AdminUploadDocumentsController extends AdminUploadsController {

	public $alias = 'upload_documents';

	protected $storage = 'data/documents/';

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

	protected $randomName = false;

}
