<?php

class Admin extends Member {

	protected $table = TABLE_ADMIN;

	public static $roles = array(
		'superuser',
		'admin',
		'manager',
	);

	public function domains()
	{
		return $this->belongsToMany('Domain', TABLE_ADMIN_OF_DOMAIN);
	}

	public function is($roles)
	{
		if (!is_array($roles))
		{
			$roles = func_get_args();
		}

		foreach ($roles as $role)
		{
			self::validateRole($role);
		}

		return in_array($this->role, $roles);
	}

	protected function rules()
	{
		$rules = array(
			'email' => 'required|unique:' . TABLE_ADMIN . ',email,' . $this->id . '|email',
			'login' => 'required|unique:' . TABLE_ADMIN . ',login,' . $this->id . '|regex:#^[a-z\\d]{3,}$#',
			'password' => 'min:7|confirmed',
			'role' => 'required|in:admin,manager',
		);

		if (!$this->id)
		{
			$rules['password'] .= '|required';
		}

		return $rules;
	}


	public static function getRoles($till = null, $upper = true)
	{
		if ($till)
		{
			self::validateRole($till);
		}

		$roles = array();

		foreach ($upper ? self::$roles : array_reverse(self::$roles) as $role)
		{
			$roles[] = $role;

			if ($till == $role)
			{
				break;
			}
		}

		return $roles;
	}

	public static function checkAuth(self $admin = null)
	{
		if (!$admin)
		{
			$admin = Auth::admin()->get();
		}

		if (!$admin || !$admin->active)
		{
			return false;
		}

		if ($admin->is('superuser'))
		{
			return true;
		}

		foreach ($admin->domains as $domain)
		{
			if ($domain->name === DOMAIN && $domain->active)
			{
				return true;
			}
		}

		return false;
	}

	public static function boot()
	{
		parent::boot();

		self::deleting(function($admin)
		{
			if ($admin->role == 'superuser')
			{
				throw new Exception('Can not do any action with superuser');
			}

			DB::beginTransaction();
		});

		self::deleted(function($admin)
		{
			DB::table(TABLE_ADMIN_OF_DOMAIN)->where('admin_id', $admin->id)->delete();

			DB::commit();
		});
	}

	public static function validateRole($role)
	{
		if (!in_array($role, self::$roles))
		{
			throw new Exception('Unknown role \'' . $role . '\'');
		}
	}

}
