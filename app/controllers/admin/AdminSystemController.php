<?php

class AdminSystemController extends AdminSettingsController {

	public $alias = 'system';

	public function update()
	{
		$config = Config::get('settings.' . $this->alias, array());
		$input = $this->getInput();

		$redirect = parent::update();

		$imageSizes = array(
			'large',
			'medium',
			'small',
		);

		$imageFields = array(
			'height',
			'type',
			'width',
		);

		foreach ($imageSizes as $imageSize)
		{
			$rescale = false;

			foreach ($imageFields as $imageField)
			{
				$key = 'image_' . $imageSize . '_' . $imageField;

				if (!array_key_exists($key, $config))
				{
					$config[$key] = '';
				}

				if (!array_key_exists($key, $input))
				{
					$input[$key] = '';
				}

				if ($config[$key] != $input[$key])
				{
					$rescale = true;
				}
			}

			if ($rescale)
			{
				ImageCopy::rescale(
					$imageSize,
					(int) $input['image_' . $imageSize . '_width'],
					(int) $input['image_' . $imageSize . '_height'],
					$input['image_' . $imageSize . '_type']
				);
			}
		}

		return $redirect;
	}

	protected function getListData()
	{
		return array(
			'imageResizeTypes' => array(
				array('id' => 'fit', 'name' => 'Уместить'),
				array('id' => 'crop', 'name' => 'Обрезать'),
				array('id' => 'cover', 'name' => 'Растянуть'),
				array('id' => 'width', 'name' => 'По ширине'),
				array('id' => 'height', 'name' => 'По высоте'),
			),
			'columnSizes' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'системы',
		);
	}

	protected function getInput()
	{
		$input = parent::getInput();

		if (empty($input['mailing_password']))
		{
			$input['mailing_password'] = Config::get('settings.' . $this->alias . '.mailing_password', '');
		}

		return $input;
	}

}
