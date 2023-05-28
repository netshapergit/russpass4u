<?php

class Meta {

	protected static $page = false;

	public static function request()
	{
		return array(
			// primary domain for current site (may vary from host)
			'domain' => DOMAIN,
			// requested host (it may be an alias)
			'host' => Request::server('HTTP_HOST'),
			'input' => Input::except('_method'),
			'inputPrev' => Session::get('input'),
			'path' => '/' . ltrim(Request::path(), '/'),
			'root' => Request::root(),
			'segments' => Request::segments(),
			'url' => Request::url(),
		);
	}

	public static function page()
	{
		if (self::$page === false)
		{
			self::$page = Page::findByPath(Request::path());
		}

		return self::$page ?: null;
	}

}
