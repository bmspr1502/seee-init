<?php
if(isset($_FILES)) {
    include "DB.php";
    if(isset($_GET)){
        $imageCaption = $_GET['imageCaption'];
        $table = $_GET['table'];
    }
    $imageName = $_FILES['image']['name'];
    $location = "assets/img/$table/".$imageName;
    $imageerror=$_FILES['image']['error'];
    if($imageerror===0) {
        $uploadOk = 1;
        $imageFileType = pathinfo($location, PATHINFO_EXTENSION);

        /* Valid Extensions */
        $valid_extensions = array("jpg", "jpeg", "png", "svg");
        /* Check image extension */
        if (!in_array(strtolower($imageFileType), $valid_extensions)) {
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Image must be in jpg/jpeg/png/svg format";
        } else {
            $imagesize = $_FILES['image']['size'];
            $imagesizeinmb = round($imagesize / (1024*1024) , 2);
            $imageNameNew = uniqid('', true) . "." . $imageFileType;
            $NewLocation = $location = "assets/img/$table/" . $imageNameNew;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $NewLocation)) {
                $image = $_FILES['image']['tmp_name'];
                //echo $imageName;

                $query = "INSERT INTO `$table` (imageName, imageCaption, imageSize)
                          VALUES ('$imageNameNew', '$imageCaption', $imagesizeinmb)";
                $result = $con->query($query);
                if ($result) {
                    //setcookie('about', '', time() - 3600, '/');
                    echo "Successful,";
                    echo $imageNameNew;
                } else {
                    echo $result;
                }
            } else {
                echo "File not updated";
            }

        }
    }else{
        echo $imageerror;
    }
}else{
    echo "Failure";
}