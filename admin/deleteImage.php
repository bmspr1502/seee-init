<?php
if(isset($_POST['table'])){
    include "DB.php";
    $table = $_POST['table'];
    $id = $_POST['id'];
    $image = $_POST['imageName'];
    $query = "DELETE FROM $table WHERE id= $id";
    if($con->query($query)) {
        if (file_exists('assets/img/'.$table .'/' . $image)) {
            unlink('assets/img/'.$table .'/' . $image);
        }
        echo "DELETED";
    }else{
        echo $con->error;
    }
}else{
    echo "NOT POST";
}
