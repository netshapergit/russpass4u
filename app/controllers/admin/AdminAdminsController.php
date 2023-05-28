<?php

class AdminAdminsController extends AdminModelController {

	protected $modelName = 'Admin';

	public $alias = 'admins';

	public function store()
	{
		return $this->protectSuperuser() ?: parent::store();
	}

	public function show($itemId)
	{
		return $this->protectSuperuser($itemId) ?: parent::show($itemId);
	}

	public function edit($itemId)
	{
		return $this->protectSuperuser($itemId) ?: parent::edit($itemId);
	}

	public function update($itemId)
	{
		return $this->protectSuperuser($itemId) ?: parent::update($itemId);
	}

	public function destroy($itemId)
	{
		return $this->protectSuperuser($itemId) ?: parent::destroy($itemId);
	}

	protected function with($itemId = null)
	{
		return array(
			'domains',
		);
	}

	protected function getListData($itemId = null)
	{
		return array(
			'domains' => Domain::all()->toArray(),
			'roles' => Admin::getRoles('admin', false),
		);
	}

	protected function getText()
	{
		return array(
			'formHeader' => 'админа',
			'listHeader' => 'Админы',
		);
	}
	
	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
			array('alias' => 'login', 'label' => 'Логин'),
			array('alias' => 'email', 'label' => 'E-mail'),
			array('alias' => 'role', 'label' => 'Роль'),
			array('alias' => 'active', 'label' => 'Активен', 'type' => 'checkbox'),
			array('alias' => 'domains', 'label' => 'Домены', 'type' => 'collection', 'url' => $this->checkAccess('domains')),
		);
	}

	protected function protectSuperuser($itemId = null)
	{
		if (Input::get('role') == 'superuser'
			|| $itemId && $this->findItem($itemId)->role == 'superuser'
		) {
			return Redirect::to(URL_ADMIN . '/' . $this->alias);
		}
	}

}
