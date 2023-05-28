<?php

class Alias extends Model {

	protected $table = TABLE_ALIAS;

	public function domain()
	{
		return $this->belongsTo('Domain');
	}

	public function getAsciiNameAttribute()
	{
		if (preg_match('#^[a-z\\d\\-.]+\\.[a-z]+$#', $this->name))
		{
			return $this->name;
		}

		$idn = new idna_convert(array(
			'idn_version' => 2008,
		));

		return $idn->encode($this->name);
	}

	protected function rules()
	{
		return array(
			'domain_id' => 'required|integer|exists:' . TABLE_DOMAIN . ',id',
			'name' => 'required|unique:' . TABLE_ALIAS . ',name,' . $this->id . '|regex:#^[a-z\\d\\-.а-я]+\\.[a-zа-я]+$#u',
		);
	}

	public static function boot()
	{
		parent::boot();

		$handler = function($alias)
		{
			self::updateCache();
		};

		self::saved($handler);
		self::deleted($handler);
	}

	public static function updateCache($checkExists = false)
	{
		$aliasesPath = app_path('/storage/aliases.json');
		$htaccessPath = public_path('/.htaccess');

		if (!$checkExists || !is_file($aliasesPath) || !is_file($htaccessPath))
		{
			$cache = array();
			$htaccess = '';

			foreach (self::all() as $alias)
			{
				if ($alias->active)
				{
					$cache[$alias->ascii_name] = $alias->domain->name;
					/*
						RewriteCond %{HTTP_HOST} ^foo\.net$ [NC]
						RewriteCond %{REQUEST_URI} ^/site/ [NC]
						RewriteRule ^site/(.*)$ /domains/bar.org/allow/public/$1 [L]
					*/
					$htaccess .= '
						RewriteCond %{HTTP_HOST} ^' . str_replace(array('.', '-'), array('\\.', '\\-'), $alias->ascii_name) . '$ [NC]
						RewriteCond %{REQUEST_URI} ^/site/ [NC]
						RewriteRule ^site/(.*)$ /domains/'.  $alias->domain->name . '/allow/public/$1 [L]
					';
				}
			}

			$htaccess = str_replace(
				'###ALIASES###',
				$htaccess,
				file_get_contents(base_path('/htaccess'))
			);

			file_put_contents($aliasesPath, json_encode($cache));
			file_put_contents($htaccessPath, $htaccess);
		}
	}

}
