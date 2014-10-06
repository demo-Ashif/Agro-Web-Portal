<?php
    header('Content-type: text/html; charset=utf-8');
    include("connect.php"); 

    
    $query = $con->query("select * from agri_tools_info");
    $row= $query->fetch_array();
    if ($query) 
    {
        echo $row['title']; 
        echo "<br>";
        echo $row['post']; 
        echo "<br>";
        
        echo "<img src=".$row['photo_dir'].">";
    }else
    {
        echo mysqli_error($con);
    }
?>
