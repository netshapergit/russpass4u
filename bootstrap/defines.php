<?php

// git last commit first 7 chars

define('V', substr(exec('git log --format="%H" -n 1'), 0, 7) ?: 'none');

// domains

$domain = array_key_exists('SERVER_NAME', $_SERVER) ? $_SERVER['SERVER_NAME'] : '_';

if (!is_dir(__DIR__ . '/../public/domains/' . $domain))
{
	$alias = $domain;
	$domain = null;

	$aliasesPath = __DIR__ . '/../app/storage/aliases.json';

	if (is_file($aliasesPath))
	{
		$aliases = json_decode(file_get_contents($aliasesPath), true);
		if (array_key_exists($alias, $aliases) && is_dir(__DIR__ . '/../public/domains/' . $aliases[$alias]))
		{
			$domain = $aliases[$alias];
		}
	}
}

if (!$domain)
{
	die('Domain not found');
}

define('DOMAIN', $domain);
define('PREFIX', str_replace(array('-', '.'), array('_', '__'), DOMAIN));

// common tables

define('TABLE_ADMIN', '$admins');
define('TABLE_ADMIN_OF_DOMAIN', '$admins_of_domains');
define('TABLE_ALIAS', '$aliases');
define('TABLE_DOMAIN', '$domains');
define('TABLE_FIELD_TYPE', '$field_types');
define('TABLE_MODULE_TYPE', '$module_types');
define('TABLE_MODULE_TYPE_ADDITION', '$module_type_additions');
define('TABLE_MODULE_TYPE_ADDITION_OF_DOMAIN', '$module_type_additions_of_domains');
define('TABLE_MODULE_TYPE_OF_DOMAIN', '$module_types_of_domains');

// domain tables

define('TABLE_FEEDBACK', PREFIX . '$feedbacks');
define('TABLE_FORME', PREFIX . '$formes');
define('TABLE_FORME_FIELD', PREFIX . '$forme_fields');
define('TABLE_FORME_FIELD_OF_FORME', PREFIX . '$forme_fields_of_formes');
define('TABLE_LAYOUT', PREFIX . '$layouts');
define('TABLE_LAYOUT_OF_FORME_FIELD', PREFIX . '$layouts_of_forme_fields');
define('TABLE_LAYOUT_OF_MODULE', PREFIX . '$layouts_of_modules');
define('TABLE_LAYOUT_OF_PAGE_FIELD', PREFIX . '$layouts_of_page_fields');
define('TABLE_LAYOUT_OF_USER_FIELD', PREFIX . '$layouts_of_user_fields');
define('TABLE_MODULE', PREFIX . '$modules');
define('TABLE_MODULE_TYPE_LAYOUT', PREFIX . '$module_type_layouts');
define('TABLE_OPTION', PREFIX . '$options');
define('TABLE_PAGE', PREFIX . '$pages');
define('TABLE_PAGE_FIELD', PREFIX . '$page_fields');
define('TABLE_PAGE_FIELD_OF_LAYOUT', PREFIX . '$page_fields_of_layouts');
define('TABLE_PAGE_OF_MODULE', PREFIX . '$pages_of_modules');
define('TABLE_POSITION', PREFIX . '$positions');
define('TABLE_SELECT', PREFIX . '$selects');
define('TABLE_SELECT_OF_FORME_FIELD', PREFIX . '$selects_of_forme_fields');
define('TABLE_SELECT_OF_PAGE_FIELD', PREFIX . '$selects_of_page_fields');
define('TABLE_SELECT_OF_USER_FIELD', PREFIX . '$selects_of_user_fields');
define('TABLE_SETTING_FIELD', PREFIX . '$setting_fields');
define('TABLE_USER', PREFIX . '$users');
define('TABLE_USER_FIELD', PREFIX . '$user_fields');

// other

define('URL_ADMIN', '/admin');
define('URL_USER', '/user');
