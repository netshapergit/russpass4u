<?php

$files = array(
	__DIR__ . '/../htaccess' => __DIR__ . '/../public/.htaccess',
	__DIR__ . '/../app/models/FeedbackCustom' => __DIR__ . '/../public/domains/' . DOMAIN . '/deny/storage/models/FeedbackCustom.php',
	__DIR__ . '/../app/models/PageCustom' => __DIR__ . '/../public/domains/' . DOMAIN . '/deny/storage/models/PageCustom.php',
	__DIR__ . '/../app/models/UserCustom' => __DIR__ . '/../public/domains/' . DOMAIN . '/deny/storage/models/UserCustom.php',
);

foreach ($files as $origin => $path)
{
	if (!is_file($path))
	{
		file_put_contents($path, file_get_contents($origin));
	}
}
