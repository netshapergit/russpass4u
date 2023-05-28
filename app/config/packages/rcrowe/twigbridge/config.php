<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Extension
	|--------------------------------------------------------------------------
	|
	| File extension for Twig view files.
	|
	*/
	'extension' => 'twig',

	/*
	|--------------------------------------------------------------------------
	| Delimiters
	|--------------------------------------------------------------------------
	|
	| Change the block delimiter tags.
	|
	*/
	'delimiters' => array(
		'tag_comment'  => array('{#', '#}'),
		'tag_block'	=> array('{%', '%}'),
		'tag_variable' => array('{$', '$}'),
	),

	/*
	|--------------------------------------------------------------------------
	| Accepts all Twig environment configuration options
	|--------------------------------------------------------------------------
	|
	| http://twig.sensiolabs.org/doc/api.html#environment-options
	|
	*/
	'twig' => array(

		// When set to true, the generated templates have a __toString() method
		// that you can use to display the generated nodes.
		// default: false
		'debug' => false,

		//  The charset used by the templates.
		// default: utf-8
		'charset' => 'utf-8',

		// The base template class to use for generated templates.
		// default: TwigBridge\Twig\Template
		'base_template_class' => 'TwigBridge\Twig\Template',

		// An absolute path where to store the compiled templates, or false to disable caching. If null
		// then the cache file path is used.
		// default: cache file storage path
		'cache' => null,

		// When developing with Twig, it's useful to recompile the template
		// whenever the source code changes. If you don't provide a value
		// for the auto_reload option, it will be determined automatically based on the debug value.
		'auto_reload' => true,

		// If set to false, Twig will silently ignore invalid variables
		// (variables and or attributes/methods that do not exist) and
		// replace them with a null value. When set to true, Twig throws an exception instead.
		// default: false
		'strict_variables' => Config::get('settings.system.debug', false),

		// If set to true, auto-escaping will be enabled by default for all templates.
		// default: true
		'autoescape' => true,

		// A flag that indicates which optimizations to apply
		// (default to -1 -- all optimizations are enabled; set it to 0 to disable)
		'optimizations' => -1,
	),

	/*
	|--------------------------------------------------------------------------
	| Extensions
	|--------------------------------------------------------------------------
	|
	| List of Twig extensions that are made available to your Twig templates.
	| Supports string or closure.
	| NOTE: If you change this, make sure you clear your cache
	|
	*/
	'extensions' => array(
		'Twig_Extension_Debug',
		'TwigBridge\Extensions\AliasLoader',
		'TwigBridge\Extensions\HelperLoader',
		function()
		{
			$policy = new Twig_Sandbox_SecurityPolicy(
				Config::get('twigbridge::policy.tags'),
				Config::get('twigbridge::policy.filters'),
				Config::get('twigbridge::policy.methods'),
				Config::get('twigbridge::policy.properties'),
				Config::get('twigbridge::policy.functions')
			);
			return new Twig_Extension_Sandbox($policy, Config::get('twigbridge::sandbox'));
		},
	),

	/*
	|--------------------------------------------------------------------------
	| Functions
	|--------------------------------------------------------------------------
	|
	| Functions that are made available to your Twig templates.
	| Supports `string` or `closure`.
	|
	*/
	'functions' => array(
		// URLs
//		'route',
//		'action',
//		'asset',
//		'url',
//		'link_to',
//		'link_to_asset',
//		'link_to_route',
//		'link_to_action',
//		'secure_asset',
//		'secure_url',
		// Translation
//		'trans',
//		'trans_choice',
		// Miscellaneous
		'csrf_token',
	),

	/*
	|--------------------------------------------------------------------------
	| Filters
	|--------------------------------------------------------------------------
	|
	| Filters that are made available to your Twig templates.
	| Supports `string` or `closure`.
	|
	*/
	'filters' => array(
		// Strings
		'camel_case',
		'snake_case',
		'studly_case',
		'str_finish',
		'str_plural',
		'str_singular'
	),

	/*
	|--------------------------------------------------------------------------
	| Alias shortcuts
	|--------------------------------------------------------------------------
	|
	| Call these shortcuts in your Twig files. A shortcut is always a shortcut
	| to an alias.
	|
	*/
	'alias_shortcuts' => array(
//		'config' => 'config_get',
//		'lang' => 'lang_get',
//		'logged_in' => 'auth_check',
	),

	/*
	|--------------------------------------------------------------------------
	| Global variables
	|--------------------------------------------------------------------------
	|
	| These will always be passed in and can be accessed as Twig variables.
	| NOTE: these will be overwritten if you pass data into the view with the same key.
	|
	*/
	'globals' => array(),

	'sandbox' => true,

	'policy' => array(

		'tags' => array(
			'autoescape',
			'block',
			'do',
			'embed',
			'extends',
			'filter',
//			'flush',
			'for',
			'from',
			'if',
			'import',
			'include',
			'macro',
			'sandbox',
			'set',
			'spaceless',
			'use',
			'verbatim',
		),

		'filters' => array(
			'abs',
			'batch',
			'capitalize',
			'convert_encoding',
			'date',
			'date_modify',
			'default',
			'escape',
			'first',
			'format',
			'join',
			'json_encode',
			'keys',
			'last',
			'length',
			'lower',
			'merge',
			'nl2br',
			'number_format',
			'raw',
			'replace',
			'reverse',
			'round',
			'slice',
			'sort',
			'split',
			'striptags',
			'title',
			'trim',
			'upper',
			'url_encode',
		),

		'methods' => array(
			'Illuminate\Database\Eloquent\Collection' => array(
				'lists',
				'slice',
				'sortBy',
			),
			'Illuminate\Support\MessageBag' => array(
				'all',
				'any',
				'count',
				'first',
				'get',
				'getMessages',
				'has',
			),
			'Illuminate\Support\ViewErrorBag' => array(
				'all',
				'any',
				'count',
				'first',
				'get',
				'getMessages',
				'has',
				'toArray',
			),
		),

		'properties' => array(),

		'functions' => array(
			'attribute',
			'block',
			'constant',
			'cycle',
			'date',
			'dump',
			'include',
			'max',
			'min',
			'parent',
			'random',
			'range',
//			'source',
//			'template_from_string',
		),

	),

);
