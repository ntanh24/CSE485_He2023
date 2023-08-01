<?php
require_once APP_ROOT.'/app/services/UserService.php';
class HomeController {
    public function index() {
        // Goi du lieu tu UserService
        $userService = new UserService();
        $users = $userService->getAllUsers();

        //Render du lieu lay duoc ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }
}