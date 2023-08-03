<?php
<<<<<<< HEAD
include "app/repositories/UserRepository.php";
class HomeController {
    public function index() {
        include("app/views/index.php");
    }

    public function admin() {
        // Goi du lieu tu UserRepository
        $userRepoObj = new UserRepository();
        $users = $userRepoObj->getAllUsers();

        //Render du lieu lay duoc ra HomePage
        include("app/views/feed.php");
=======
require_once APP_ROOT.'/app/services/UserService.php';
class HomeController {
    public function index() {
        // Goi du lieu tu UserService
        $userService = new UserService();
        $users = $userService->getAllUsers();

        //Render du lieu lay duoc ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
>>>>>>> 28b9b84a0d2004abcce0687c8b8e054958ee885e
    }
}