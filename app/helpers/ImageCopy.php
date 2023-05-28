<?php

use Intervention\Image\Facades\Image;

class ImageCopy {

	public static function imagesPath()
	{
		return app('path.domain') . '/allow/public/data/images/';
	}

	public static function copy($fileName, $copySize, $width, $height, $type)
	{
		$image = Image::make(self::imagesPath() . 'source/' . $fileName);

		if ($width > $image->width())
		{
			$width = $image->width();
		}

		if ($height > $image->height())
		{
			$height = $image->height();
		}

		$exists = true;

		if ($width && $height)
		{
			switch ($type)
			{
				case 'crop':
					$image->fit($width, $height);
					break;
				case 'cover':
					$image->resize($width, $height);
					break;
				case 'width':
					$image->widen($width);
					break;
				case 'height':
					$image->heighten($height);
					break;
				case 'fit':
				default:
					if ($image->height() / $height > $image->width() / $width)
					{
						$image->heighten($height);
					}
					else
					{
						$image->widen($width);
					}
					break;
			}
		}
		elseif ($width)
		{
			$image->widen($width);
		}
		elseif ($height)
		{
			$image->heighten($height);
		}
		else
		{
			$exists = false;
		}

		if ($exists)
		{
			$image->save(self::imagesPath() . $copySize . '/' . $fileName);
		}

		$image->destroy();

		return $exists;
	}
	
	public static function rescale($copySize, $width, $height, $type)
	{
		$path = self::imagesPath() . 'source/';

		foreach (scandir($path) as $fileName)
		{
			if (is_file($path . $fileName) && preg_match('#^\\w+\\.\\w+$#', $fileName))
			{
				self::copy($fileName, $copySize, $width, $height, $type);
			}
		}
	}
	
}
