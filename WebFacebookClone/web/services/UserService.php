<?php
require_once APP_ROOT.'/web/models/User.php';
class UserService {
    public function getAllUsers() {
        //Buoc 1: Ket noi Db
        try {
            $conn = new PDO('mysql:host=localhost; dbname=facebookclone', 'root',  '244');
            
            //Buoc 2: Truy van du lieu
            $sql = "SELECT * FROM users";
            $stmt = $conn->query($sql);

            //Buoc 3: Xu ly ket qua tra ve
            $users = [];
            while($row = $stmt->fetch()) {
                $user = new User($row['user_id'], $row['username'], $row['email'], $row['password'], $row['profile_picture'], $row['bio'], $row['created_at'], $row['updated_at']);
                $users[] = $user;
            }
            return $users;
        } catch(PDOException $e) {
            return $user = [];
            // echo $e->getMassage();
        }
    }
}