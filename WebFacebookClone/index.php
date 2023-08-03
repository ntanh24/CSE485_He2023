<?php

// require_once('../app/config/config.php'); để trong WebfacebookClone

// require_once('../config/config.php');//

// require_once APP_ROOT.'/web/controllers/HomeController.php';

// $homeController = new HomeController();
// $homeController->index();

$controller = isset($_GET['c'])?$_GET['c']:'home';
$action     = isset($_GET['a'])?$_GET['a']:'index';

// if($controller == 'home') {
//     require_once APP_ROOT.'/app/controllers/HomeController.php';
//     $homeController = new HomeController();
//     $homeController->index();
// } else if($controller == 'user') {
//     require_once APP_ROOT.'/app/controllers/UserController.php';
//     $userController = new UserController();
//     $userController->index();
// } else {
//     echo "Khong ton tai URL";
// }

$controller = ucfirst($controller);
$controller = $controller."Controller";
$pathController = "app/controllers/".$controller.".php";

if(!file_exists($pathController)) {
    die('Yêu cầu Controller không tồn tại, vui lòng kiểm tra lại liên kết');
}
include($pathController);

$myController = new $controller();
$myController->$action();