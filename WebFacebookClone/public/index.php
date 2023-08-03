<?php

require_once('../app/config/config.php');
// require_once APP_ROOT.'/web/controllers/HomeController.php';

// $homeController = new HomeController();
// $homeController->index();

$controller = isset($_GET['controller'])?$_GET['controller']:'home';
$action     = isset($_GET['action'])?$_GET['action']:'index';

if($controller == 'home') {
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
} else if($controller == 'user') {
    require_once APP_ROOT.'/app/controllers/UserController.php';
    $userController = new UserController();
    $userController->index();
} else {
    echo "Khong ton tai URL";
}

