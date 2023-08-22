<?php
include 'queries.php';
$id = $_GET['id'];
$img_obj = new Queries();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Images</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
    <a href="index.php" class="btn btn-primary">Users</a>
    <br>
    <?php
    $images = $img_obj->display_images($id);
    foreach ($images as  $image) {?>
        <img src="uploads/<?=$image['image']?>" class="img-fluid" alt="No Image Found" width="200">
    <?php
    }
    ?>
    </div>

    <script src="js/bootstrap.min.js">

    </script>
</body>
</html>
