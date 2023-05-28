<?php

class Domain extends Model {

	protected $table = TABLE_DOMAIN;

	public $origin;

	public function admins()
	{
		return $this->belongsToMany('Admin', TABLE_ADMIN_OF_DOMAIN);
	}

	public function aliases()
	{
		return $this->hasMany('Alias');
	}

	public function moduleTypes()
	{
		return $this->belongsToMany('ModuleType', TABLE_MODULE_TYPE_OF_DOMAIN);
	}

	public function moduleTypeAdditions()
	{
		return $this->belongsToMany('ModuleTypeAddition', TABLE_MODULE_TYPE_ADDITION_OF_DOMAIN);
	}

	protected function rules()
	{
		return array(
			'name' => 'required|unique:' . TABLE_DOMAIN . ',name,' . $this->id . '|regex:#^[a-z\\d\\-.]+\\.[a-z]+$#',
		);
	}

	public static function current()
	{
		return self::where('name', DOMAIN)->firstOrFail();
	}

	public static function actual()
	{
		return self::current()->actual;
	}

	public static function getTablePrefix($name)
	{
		return str_replace(array('-', '.'), array('_', '__'), $name);
	}

	public static function boot()
	{
		parent::boot();

		self::saving(function($domain) {
			if (array_key_exists('origin_domain_id', $domain->attributes))
			{
				$origin = Domain::find($domain->attributes['origin_domain_id']);

				if ($origin)
				{
					$domain->origin = $origin->name;
				}

				unset($domain->attributes['origin_domain_id']);
			}
		});

		self::created(function($domain)
		{
			$originPrefix = $domain->origin
				? self::getTablePrefix($domain->origin)
				: '_';

			// copy tpl tables
			foreach (Config::get('database.domainTables') as $table)
			{
				DB::statement('
					CREATE TABLE
					' . self::getTablePrefix($domain->name) . '$' . $table . '
					LIKE
					' . $originPrefix . '$' . $table
				);

				DB::statement('
					INSERT INTO
					' . self::getTablePrefix($domain->name) . '$' . $table . '
					SELECT * FROM
					' . $originPrefix . '$' . $table
				);
			}

			$originDir = $domain->origin ?: '_';

			// copy tpl files
			File::copyDirectory(
				public_path('domains/' . $originDir),
				public_path('domains/' . $domain->name)
			);
		});

		self::updated(function($domain)
		{
			if ($domain->name !== $domain->original['name'])
			{
				// rename tables
				// TODO rename custom relationships tables
				foreach (Config::get('database.domainTables') as $table)
				{
					DB::statement('
						RENAME TABLE
						' . self::getTablePrefix($domain->original['name']) . '$' . $table . '
						TO
						' . self::getTablePrefix($domain->name) . '$' . $table
					);
				}

				// rename files
				File::move(
					public_path('domains/' . $domain->original['name']),
					public_path('domains/' . $domain->name)
				);

				// update alias cache
				Alias::updateCache();
			}
		});

		// domain, domain tables and files should be removed manually only
		self::deleting(function()
		{
			return false;
		});
	}

}
