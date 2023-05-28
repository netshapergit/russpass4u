<?php

use Symfony\Component\HttpFoundation\File\UploadedFile;

class UserUploadImagesController extends UserUploadsController {

	public $alias = 'upload_images';

	protected $storage = 'data/images/source/';

	protected $availableExtensions = array(
		'gif',
		'jpg',
		'png',
	);

	protected $copySizes = array(
		'large',
		'medium',
		'small',
	);

	protected function save(UploadedFile $file, $extension)
	{
		$data = parent::save($file, $extension);

		foreach ($this->copySizes as $copySize)
		{
			$width = (int) Config::get('settings.system.image_' . $copySize . '_width');
			$height = (int) Config::get('settings.system.image_' . $copySize . '_height');
			$type = Config::get('settings.system.image_' . $copySize . '_type');

			if (ImageCopy::copy($data['fileName'], $copySize, $width, $height, $type))
			{
				$data['path_' . $copySize] = '/site/data/images/' . $copySize . '/';
			}
		}

		return $data;
	}

}
