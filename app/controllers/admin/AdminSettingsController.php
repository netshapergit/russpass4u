<?php

class AdminSettingsController extends AdminController {

	public function edit()
	{
		return $this->view($this->alias . '.settings', array(
			'item' => Config::get('settings.' . $this->alias, array()),
			'list' => $this->getListData(),
			'text' => $this->getText(),
		));
	}

	public function update()
	{
		$path = storage_path('/administrator_settings/' . $this->alias . '.json');
		file_put_contents($path, json_encode($this->getInput()));

		// TODO success and fail messages (try catch file_put_contents)
		return Redirect::to(URL_ADMIN . '/' . $this->alias);
	}

	protected function getListData()
	{
		return array();
	}

	protected function getText()
	{
		return array(
			'formHeader' => '',
		);
	}

	protected function getInput()
	{
		return Input::except('_method');
	}

}
