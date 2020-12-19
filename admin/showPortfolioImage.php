<?php
if(isset($_POST['table'])) {
    $table = $_POST['table'];
    $imgtype = $_POST['imgtype'];
    include "DB.php";
    $query = "SELECT * FROM $table WHERE imageType='$imgtype'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        $msg = "";
        while ($row = $result->fetch_assoc()) {
            $msg .= '<div class="col-lg-3 col-md-4 col-sm-6">
                    <img class="img-fluid" src="assets/img/'. $table .'/' . $row['imageName'] . '" alt="Chania">
                    <p>' . $row['imageCaption'] . '
                    <br>Size: ' . $row["imageSize"] . ' MB </p>
                    <button type="button" class="btn btn-danger" onclick="deleteImage( \'' . $row["id"] . '\', \'' . $row['imageName'] . '\' , \''.$table .'\', \''.$row['imageType'] .'\');">Delete</button>
                </div>';
        }
        echo $msg;
    } else {
        echo "NO IMAGES FOUND :(";
    }
}else{
    echo "ERROR LOADING IMAGES";
}
