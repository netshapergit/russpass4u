<?php

class AdminUploadThemeImagesController extends AdminUploadsController {

	public $alias = 'upload_theme_images';

	protected $storage = 'theme/images/';

	protected $availableExtensions = array(
		'gif',
		'ico',
		'jpg',
		'png',
	);

	protected $randomName = false;

}
