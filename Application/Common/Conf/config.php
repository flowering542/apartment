<?php
$db = require __DIR__ . '/db.php';
$config = array(
	'URL_CASE_INSENSITIVE' => false,
	'URL_MODEL' => 3,
	'URL_HTML_SUFFIX' => '.html',
	'site' => array(
		'name' => '首页-学生公寓中心'
	),
	 //调试
    'SHOW_PAGE_TRACE'=> false, 
	'MODULE_ALLOW_LIST' => array('Home', 'Admin'),
	'DEFAULT_MODULE' => 'Home'
);
return array_merge($config, $db);