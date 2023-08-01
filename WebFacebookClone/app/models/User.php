<?php

class User {
    // Properties
    private $user_id;
    private $username;
    private $email;
    private $password;
    private $profile_picture;
    private $bio;
    private $created_at;
    private $updated_at;

    // Methods
    public function __construct($user_id, $username, $email, $password, $profile_picture, $bio, $created_at, $updated_at) {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->profile_picture = $profile_picture;
        $this->bio = $bio;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    //get/set
    public function setUserInfo($user_id, $username, $email, $password, $profile_picture, $bio, $created_at, $updated_at) {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->profile_picture = $profile_picture;
        $this->bio = $bio;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    // public function getID() {
    //     return $this->user_id;
    // }
    // public function getUserName() {
    //     return $this->username;
    // }
    // public function getEmail() {
    //     return $this->email;
    // }
    // public function getPassword() {
    //     return $this->password;
    // }
    // public function getProfile() {
    //     return $this->profile_picture;
    // }
    // public function getBio() {
    //     return $this->bio;
    // }
    // public function getCreated() {
    //     return $this->created_at;
    // }
    // public function getUpdated() {
    //     return $this->updated_at;
    // }


    public function getUserInfo() {
        return array(
            'user_id' => $this->user_id,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'profile_picture' => $this->profile_picture,
            'bio' => $this->bio,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        );
    }
}