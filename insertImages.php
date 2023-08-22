<?php
include 'queries.php';
$id = $_GET['id'];
$img_obj = new Queries();
if (array_key_exists('image', $_POST)) {
    $img_obj->insert_images($id, $_POST);
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Insert</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Users</a>
        <br>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image[]" multiple="multiple" id="image">
        <button type="submit" name="image" class="btn btn-success">Add Image</button>
    </form>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>