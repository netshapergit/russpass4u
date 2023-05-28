<?php

use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadsController extends BaseController {

	// 16 mb
	protected $maxSize = 16777216;

	protected $nameLength = 4;

	protected $storage;

	protected $name = 'file';

	protected $availableExtensions = array();

	protected $synonyms = array(
		'jpeg' => 'jpg',
	);

	protected $randomName = true;

	function store()
	{
		try
		{
			$file = Input::file($this->name);

			$extension = $this->getExtension($file);

			$this->validate($file, $extension);

			$data = $this->save($file, $extension);
		}
		catch (Exception $e)
		{
			$data = array(
				'error' => $e->getMessage(),
			);
		}

		return Response::json($data);
	}

	protected function getExtension(UploadedFile $file)
	{
		$extension = strtolower($file->getClientOriginalExtension());

		foreach ($this->synonyms as $synonym => $origin)
		{
			if ($extension == $synonym)
			{
				$extension = $origin;
			}
		}

		return $extension;
	}

	protected function getName(UploadedFile $file)
	{
		$extension = preg_quote($file->getClientOriginalExtension());

		if ($extension)
		{
			$extension = '\\.' . $extension;
		}

		$name = preg_replace('#' . $extension . '$#', '', $file->getClientOriginalName());

		return preg_replace('#[^a-z\\d_]#', '_', strtolower($name));
	}

	protected function validate(UploadedFile $file, $extension)
	{
		if (!$file->isValid())
		{
//			throw new Exception('File is not valid');
			throw new Exception('Некорректный файл');
		}

		if ($file->getSize() > $this->maxSize)
		{
			$maxSizeMb = (int) ($this->maxSize / 1024 / 1024);

//			throw new Exception('File is too large. Max size is ' . $maxSizeMb . 'mb');
			throw new Exception('Файл слишком большой. Максимальный размер ' . $maxSizeMb . ' МБ');
		}

		if ($this->availableExtensions && !in_array($extension, $this->availableExtensions))
		{
			$availableExtensions = implode(', ', $this->availableExtensions);

//			throw new Exception('Invalid file extension. Available extensions are: ' . $availableExtensions);
			throw new Exception('Некорректное расширение файла. Допустимые расширения: ' . $availableExtensions);
		}
	}

	protected function getPublicPath()
	{
		return app('path.domain') . '/allow/public/';
	}

	protected function save(UploadedFile $file, $extension)
	{
		$path = $this->getPublicPath() . $this->storage;

		$copyIndex = 0;

		do
		{
			$copyIndex++;

			if ($this->randomName)
			{
				$name = Str::random($this->nameLength);
			}
			else
			{
				$suffix = $copyIndex > 1
					? '_' . $copyIndex
					: '';

				$name = $this->getName($file) . $suffix;
			}

			$fileName = $extension
				? $name . '.' . $extension
				: $name;
		}
		while (file_exists($path . $fileName));

		$file->move($path, $fileName);

		return array(
			'extension' => $extension,
			'fileName' => $fileName,
			'name' => $name,
			'path' => '/site/' . $this->storage,
		);
	}


}
