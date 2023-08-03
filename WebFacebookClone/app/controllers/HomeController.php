<?php

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
    }
}