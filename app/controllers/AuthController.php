<?php

use Illuminate\Support\MessageBag;

class AuthController extends BaseController {

	const ADMIN = 'Admin';
	const USER = 'User';

	public function show()
	{
		if (Admin::checkAuth())
		{
			return Redirect::to('admin');
		}
		else
		{
			return View::make('_.auth');
		}
	}

	public function loginAdmin()
	{
		try
		{
			$user = $this->login(self::ADMIN);

			Auth::admin()->login($user);

			return Redirect::intended('admin');
		}
		catch(Exception $e)
		{
//			Input::flashExcept('password');
			return Redirect::to('auth/login/admin');//->withInput(Input::except('password'));
		}
	}

	public function newloginUser() {
		try {

			$user = $this->login(self::USER);
			Auth::user()->login($user);

			//$userShop = Page::where('user_id', $user->id)->where('active', true)->where('layout_id', 12)->first();
			$relink = '';
			//if($userShop) {
				//$relink = $userShop->alias;
			//}
			return Response::json(array("url" => $relink));

		} catch(Exception $e) {
			return Response::json($this->newError('Ошибка', 'logicError'), 401);
		}
	}

	public function loginUser()
	{
		$redirect = Redirect::back();
		//$redirect = Redirect::intended('user');

		try
		{
			$user = $this->login(self::USER);

			Auth::user()->login($user);
			
			$userpage =  Config::get('settings.system.to_user_auh');
			if ($userpage) {
				$redirect = Redirect::intended('user');
			}
		}
		catch(Exception $e)
		{
			$messageBag = new MessageBag;
			$messageBag->add('auth', $e->getMessage());
			$redirect
				->withErrors($messageBag)
				->with('input', Input::except('_method', 'password'));;
		}

		return $redirect;
	}

	public function logoutAdmin()
	{
		Auth::admin()->logout();
		return Redirect::intended('/');
	}

	public function logoutUser()
	{
		Auth::user()->logout();
		return Redirect::intended('/');
	}

	protected function login($userClass)
	{
		$user = $userClass::where('login', Input::get('login'))->first();
		if (!$user)
		{
			throw new Exception('Учетная запись не найдена');
		}

		if (!Hash::check(Input::get('password'), $user->password))
		{
			throw new Exception('Пароль не совпадает');
		}

		if (!$user->active)
		{
			throw new Exception('Учетная запись заблокирована');
		}

		if ($userClass === self::ADMIN && !Admin::checkAuth($user))
		{
			throw new Exception('Посторонний домен');
		}

		return $user;
	}

}
