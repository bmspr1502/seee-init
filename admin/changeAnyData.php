<?php
    if(isset($_POST['data'])){
        include "DB.php";
        $type= $con->real_escape_string($_POST['type']);
        $data = $con->real_escape_string($_POST['data']);
        $sql = "UPDATE content SET $type='$data'";
        if($con->query($sql)===TRUE)
            echo "Updated Successfulyy";
        else {
            echo "Error updating record: " . $con->error;
        }

        $con->close();
    }else{
        echo "Post Not received";
    }

