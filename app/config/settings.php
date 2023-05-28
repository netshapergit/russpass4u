<?php

$config = array();

foreach (array('site', 'system') as $settings)
{
	$settingsPath = storage_path('/administrator_settings/' . $settings . '.json');
	$config[$settings] = file_exists($settingsPath) ?
		json_decode(file_get_contents($settingsPath), true) : array();
}


return $config;
