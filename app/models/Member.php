<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

abstract class Member extends Model implements UserInterface, RemindableInterface {

	protected $guarded = array(
		'id',
		'created_at',
		'updated_at',
		'remember_token',
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array(
		'password',
		'remember_token',
	);

	public static $accessLevels = array(
		'any' => 'Все',
		'guest' => 'Гости',
		'user' => 'Зарегистрированные',
	);

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public static function getAccessLevels()
	{
		return array_keys(self::$accessLevels);
	}

	public static function getAccessLevelOptions()
	{
		$options = array();

		foreach (self::$accessLevels as $key => $value)
		{
			$options[] = array(
				'id' => $key,
				'name' => $value,
			);
		}

		return $options;
	}

	public static function boot()
	{
		parent::boot();

		self::saving(function($user)
		{
			if ($user->password_confirmation) {
				$user->attributes['password'] = Hash::make($user->password);
			} else {
				unset($user->attributes['password']);
			}

			unset($user->attributes['password_confirmation']);
		});
	}

}
