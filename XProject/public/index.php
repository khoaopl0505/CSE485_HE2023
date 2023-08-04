<?php

require_once('../app/config/config.php');
require_once APP_ROOT.'/app/controllers/HomeController.php';

$route = isset($_GET['route'])?$_GET['route']:'home';

if($route == 'home'){
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
}else{
    echo "Other";
}