<?php
if(isset($_POST['type'])) {
    $imgtype = $_POST['type'];

    if($_POST['access']=='user')
        $folder = 'admin/';
    else if($_POST['access']=='admin')
        $folder = '';
    $table = 'impulsedata';
    include "DB.php";
    $query = "SELECT * FROM $table WHERE imageType='$imgtype'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        $msg = "";
        while ($row = $result->fetch_assoc()) {
            $links='';
            if($row['imageCaption']!=NULL)
                $links.='<h4>' . $row['imageCaption'] . '</h4>';
            if ($row['imageLink'] != NULL)
                $links .= '<a href="' . $row['imageLink'] . '" target="_blank" class="btn btn-primary">Click to view</a>';

            if ($_POST['access'] == 'admin')
                $links .= '<button type="button" class="btn btn-danger" onclick="deleteImage( \'' . $row["id"] . '\', \'' . $row['imageName'] . '\' , \'' . $table . '\', \'' . $row['imageType'] . '\');">Delete</button>';

            $msg .= '<div class="col-lg-4 mt-4">
          <div class="pic"><img src="'.$folder .'assets/img/'.$table .'/'.$row['imageName'].'"  width="100%" class="img-fluid" alt=""></div>';

            if($imgtype!='facts') {
                $msg .='<div class="member d-flex align-items-start" >              
              <div class="member-info">';
                $msg .= $links;
                $msg .= '</div></div>';
            }else{
                $msg.= $links;
            }

            $msg.= '</div>';
        }
        echo $msg ;
    } else {
        echo "NO $imgtype FOUND :(";
    }
}else{
    echo "ERROR LOADING IMAGES";
}
