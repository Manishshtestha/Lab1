<?php
include'queries.php';
$user_obj = new Queries();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
    <a href="index.php" class="btn btn-primary">Users</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Images</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $users = $user_obj->display('users');
                foreach($users as $key=>$user){?>
                <tr>
                    <td><?=++$key?></td>
                    <td><?=$user['name']?></td>
                    <td><?=$user['email']?></td>
                    <td>
                        <a href="ViewImages.php?id=<?=$user['id']?>" class="btn btn-success">View Images</a>
                        <a href="insertImages.php?id=<?=$user['id']?>" class="btn btn-success">Insert Images</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>