<?php

abstract class AdminFilesController extends AdminResourceController {

	protected $extension;

	protected $availableExtensions = array();

	protected $storage;

	protected $mode;

	protected $webPath;

	public function __construct()
	{
		// TODO find better place for it
		Validator::extend('unique_file', function($attribute, $value, $parameters)
		{
			$exists = false;

			foreach ($this->getFiles() as $file)
			{
				if ($file['id'] == $value)
				{
					$exists = true;
				}
			}

			return !$exists;
		});
	}

	public function index()
	{
		return Redirect::to(URL_ADMIN . '/files');
	}

	public function create()
	{
		return $this->view('file', array(
			'default' => $this->getDefaultContent(),
			'extension' => $this->extension,
			'items' => $this->getFiles(),
			'mode' => $this->mode,
		));
	}

	public function store()
	{
		$itemId = Input::get('name');

		if ($this->extension)
		{
			$itemId .= '.' . $this->extension;
		}
		
		$validator = $this->validate($itemId);

		if ($validator)
		{
			return Redirect::to(URL_ADMIN . '/' . $this->alias . '/create')
				->withErrors($validator)
				->with('input', Input::except('_method'));
		}
		else
		{
			$this->setCode($itemId, Input::get('code'));

			return Redirect::to(URL_ADMIN . '/' . $this->alias . '/' . $itemId . '/edit');
		}
	}

	public function edit($itemId)
	{
		if (!$this->exists($itemId))
		{
			App::abort(404);
		}

		return $this->view('file', array(
			'item' => array(
				'code' => $this->getCode($itemId),
				'extension' => $this->getExtension($itemId),
				'id' => $itemId,
				'name' => $this->getName($itemId),
				'path' => $this->webPath,
			),
			'items' => $this->getFiles(),
			'mode' => $this->mode,
		));
	}

	public function update($itemId)
	{
		if (!$this->exists($itemId))
		{
			App::abort(404);
		}

		$validator = null;

		// TODO move file
		if (Input::get('name') !== null && Input::get('name') != $this->getName($itemId))
		{
			$newItemId = Input::get('name');

			if ($this->getExtension($itemId))
			{
				$newItemId = $newItemId . '.' . $this->getExtension($itemId);
			}

			$validator = $this->validate($newItemId);

			if (!$validator)
			{
				rename($this->getPath($itemId), $this->getPath($newItemId));
				$itemId = $newItemId;
			}
		}

		if (!$validator && Input::get('code') !== null)
		{
			$this->setCode($itemId, Input::get('code'));
		}

		switch (Request::format())
		{
			case 'json';
				return $validator
					? App::abort(400, $validator->messages())
					: Response::json();

			default:
				$redirect = Redirect::to(URL_ADMIN . '/' . $this->alias . '/' . $itemId . '/edit');

				if ($validator)
				{
					$redirect
						->withErrors($validator)
						->with('input', Input::except('_method'));
				}

				return $redirect;
		}
	}

	public function destroy($itemId)
	{
		$this->unsetCode($itemId);

		return Redirect::to(URL_ADMIN . '/' . $this->alias);
	}

	protected function getStorage()
	{
		return app('path.domain') . '/allow/' . $this->storage;
	}

	protected function getAvailableExtensions()
	{
		$extensions = $this->availableExtensions;

		if ($this->extension && !in_array($this->extension, $extensions))
		{
			$extensions[] = $this->extension;
		}

		return $extensions;
	}

	protected function getRe($withExtension = true)
	{
		$quotedExtensions = array();

		foreach ($this->getAvailableExtensions() as $extension)
		{
			$quotedExtensions[] = preg_quote($extension);
		}

		$extensionRe = $withExtension && count($quotedExtensions) > 0
			? '\\.(' . implode('|', $quotedExtensions) . ')'
			: '()';

		return '#^([a-z\\d_]+)' . $extensionRe . '$#';
	}

	protected function getPath($itemId)
	{
		return preg_match($this->getRe(), $itemId)
			? $this->getStorage() . $itemId
			: null;
	}

	protected function exists($itemId)
	{
		return file_exists($this->getPath($itemId));
	}

	protected function getName($itemId)
	{
		preg_match($this->getRe(), $itemId, $matches);

		return $matches ? $matches[1] : null;
	}

	protected function getExtension($itemId)
	{
		preg_match($this->getRe(), $itemId, $matches);

		return $matches ? $matches[2] : null;
	}

	protected function getCode($itemId)
	{
		return $this->exists($itemId)
			? file_get_contents($this->getPath($itemId))
			: '';
	}

	protected function setCode($itemId, $code)
	{
		file_put_contents($this->getPath($itemId), $code);
	}

	protected function unsetCode($itemId)
	{
		unlink($this->getPath($itemId));
	}

	// TODO make it private
	public function getFiles()
	{
		$files = array();

		// backward compatibility
		if (!is_dir($this->getStorage())) {
			mkdir($this->getStorage());
		}

		foreach (scandir($this->getStorage()) as $file)
		{
			if (preg_match($this->getRe(), $file, $matches))
			{
				$files[] = array(
					'extension' => $matches[2],
					'id' => $file,
					'name' => $matches[1],
					'path' => $this->webPath,
				);
			}
		}

		return $files;
	}

	protected function getDefaultContent()
	{
		return '';
	}

	protected function rules()
	{
		return array(
			'id' => array(
				'required',
				'unique_file',
				'regex:' . $this->getRe()
			),
		);
	}

	protected function validate($itemId)
	{
		$attributes = array(
			'id' => $itemId,
		);

		$validator = Validator::make($attributes, $this->rules());

		return $validator->fails()
			? $validator
			: null;
	}

}
