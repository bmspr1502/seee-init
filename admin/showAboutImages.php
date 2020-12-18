<?php
include "DB.php";
$query = "SELECT * FROM aboutusimages";
$result = $con->query($query);

if($result->num_rows >0){
    $msg = "";
    while($row = $result->fetch_assoc()){
        $msg .= '<div class="col-lg-3 col-md-4 col-sm-6">
                    <img class="img-fluid" src="assets/img/aboutusimages/'. $row['imageName'] .'" alt="Chania">
                    <p>' . $row['imageCaption'] . '
                    <br>Size: '. $row["imageSize"] .' MB </p>
                    <button type="button" class="btn btn-danger" onclick="deleteImage( \''. $row["id"].'\', \''.$row['imageName'] .'\' , \'aboutusimages\');">Delete</button>
                </div>';
    }
    echo $msg;
}else{
    echo "NO IMAGES FOUND :(";
}