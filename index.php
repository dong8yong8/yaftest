<?php
	use Base\Base;

	define('APP_PATH', dirname(__FILE__));

	$app = new \Yaf\Application(APP_PATH . '/conf/test.ini', 'dev');
	$app->bootstrap()->run();
