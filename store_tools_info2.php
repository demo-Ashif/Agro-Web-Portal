<?php
    header('Content-type: text/html; charset=utf-8');
    include("connect.php"); 

    $title = $_POST['title'];
    $description = $_POST['description'];

    $filename = $_FILES['photoname']['name'];
    $path = 'images/tools_img';

    $mysql_path = $path."/".$filename;

    $query = $con->query("insert into agri_tools_info(title,post,photo_dir) values ('$title','$description','$mysql_path')");
    if ($query) 
    {
        echo 'Insertion Complete';
    }else
    {
        echo mysqli_error($con);
    }

?>
