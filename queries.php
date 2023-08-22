<?php
include'database.php';
class Queries extends Database{
    function display($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo 'No Data found';
        }
    }
    function display_images($id){
        $sql = "SELECT * FROM gallery WHERE user_id = $id";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo 'No Images found';
        }

    }
    // function insert_images($id,$image){
    //     array_pop($image);
    //     $image = '';
    //     if (!empty($_FILES)) {
    //         $image = $_FILES['image']['name'];
    //         $tmpname = $_FILES['image']['tmp_name'];
    //         $path = 'uploads/';
    //         move_uploaded_file($tmpname, "$path/$image");
    //     }
    //     //insert data into database table
    //     $sql="INSERT INTO `gallery`(`user_id`, `image`) VALUES ('$id','$image')";
    //     if ($this->connection->query($sql)) {
    //         echo "Image successfully added";
    //     } else {
    //         echo "Image couldn't be added";
    //     }

    // }
    function insert_images($id){
        if (!empty($_FILES['image'])) {
            $path = 'uploads/';
            $images = $_FILES['image'];
            $count = count($images['name']);
            for ($i = 0; $i < $count; $i++) {
                $image = $images['name'][$i];
                $tmpname = $images['tmp_name'][$i];
                move_uploaded_file($tmpname, "$path/$image");
                //insert data into database table
                $sql="INSERT INTO `gallery`(`user_id`, `image`) VALUES ('$id','$image')";
                if ($this->connection->query($sql)) {
                    echo "Image successfully added";
                } else {
                    echo "Image couldn't be added";
                }
            }
        }
    }

}
?>