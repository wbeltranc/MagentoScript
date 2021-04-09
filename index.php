<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

require __DIR__ . '../../app/bootstrap.php';
require __DIR__ . '/TestApp.php';


$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
/** @var \Magento\Framework\App\Http $app */
$app = $bootstrap->createApplication('TestApp');
$bootstrap->run($app);