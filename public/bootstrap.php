<?php

use app\core\AppExtract;
use app\core\MyApp;

require "../vendor/autoload.php";
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$myApp = new MyApp(new AppExtract());
$myApp->controller();
$myApp->view();
