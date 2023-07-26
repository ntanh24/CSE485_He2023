<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="">
        <h3>Facebook Clone</h3>
        <a href="<?= DOMAIN.'web/views/user/add.php'; ?> " class="">Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th>UserID</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Profile Picture</th>
                    <th>Bio</th>
                    <th >Created At</th>
                    <th>Updated AT</th>
                    <th>Sửa</th>
                    <th>Xoá</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { 
                    $userInfo = $user->getUserInfo(); ?>
                <tr>
                    <td><?= $userInfo['user_id']; ?></td>
                    <td><?= $userInfo['username']; ?></td>
                    <td><?= $userInfo['email']; ?></td>
                    <td><?= $userInfo['password']; ?></td>
                    <td><?= $userInfo['profile_picture']; ?></td>
                    <td><?= $userInfo['bio']; ?></td>
                    <td><?= $userInfo['created_at']; ?></td>
                    <td><?= $userInfo['updated_at']; ?></td>
                    <td>
                        <a href="<?= DOMAIN.'web/views/user/edit.php?id='.$userInfo['user_id'] ?>">Sửa</a>
                    </td>
                    <td>
                        <a href="<?= DOMAIN.'web/views/user/remove.php?id='.$userInfo['user_id'] ?>">Xoá</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>