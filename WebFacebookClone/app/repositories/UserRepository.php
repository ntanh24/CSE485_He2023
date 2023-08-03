<?php
include "app/models/User.php";
class UserRepository {
    public function getAllUsers() {
        //Buoc 1: Ket noi Db
        try {
            $conn = new PDO('mysql:host=localhost; dbname=facebookclone', 'root',  '244');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Buoc 2: Truy van du lieu
            $sql = "SELECT * FROM users";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            //Buoc 3: Xu ly ket qua tra ve
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();

            $users = [];
            foreach($result as $row) {
                $user = new User($row['user_id'], $row['username'], $row['email'], $row['password'], $row['profile_picture'], $row['bio'], $row['created_at'], $row['updated_at']);
                array_push($users, $user);
            }
            $conn = null;
            return $users;
        } catch(PDOException $e) {
            return $user = [];
            // echo $e->getMassage();
        }
    }
}