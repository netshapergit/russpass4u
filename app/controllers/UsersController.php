<?php

class UsersController extends BaseController {

	public function register()
	{
		$redirect = Redirect::back();

		$hiddenAliases = array();
		$hiddenFields = UserField::where('hidden', true)->get();
		foreach ($hiddenFields as $field)
		{
			$hiddenAliases[] = 'field_' . $field->alias;
		}

		$input = count($hiddenAliases) > 0
			? call_user_func_array(array('Input', 'except'), $hiddenAliases)
			: Input::all();

		$user = new User($input);

		$user->active = Config::get('settings.system.free_registration');

		if (!$user->save())
		{
			// TODO isolate errors
			// TODO isolate input
			$redirect
				->withErrors($user->validator)
				->with('input', Input::except('_method', 'password', 'password_confirmation'));
		}
		elseif ($user->active)
		{
			// TODO success message
			Auth::user()->login($user);
			
			
			$userpage =  Config::get('settings.system.to_user_reg');
			if ($userpage) {
				$redirect = Redirect::intended('user');
			}
		}
		else
		{
			// TODO approval message
		}

		return $redirect;
	}

}
