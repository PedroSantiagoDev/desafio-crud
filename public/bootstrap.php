<?php

use app\core\AppExtract;
use app\core\MyApp;

require "../vendor/autoload.php";
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->allowQuit(false);
$whoops->writeToOutput(false);

try {
    $myApp = new MyApp(new AppExtract());
    $myApp->controller();
    $myApp->view();
} catch (Throwable $e) {
    $html = $whoops->handleException($e);
    echo $html;
}
