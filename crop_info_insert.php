<?php
    header('Content-type: text/html; charset=utf-8');
    include("connect.php");

    session_start();

    if (isset($_POST['submit'])) {

        $category_id = $_POST['category_id'];
        $crop_id = $_POST['crop_id'];
        $cultivation = $_POST['cultivation'];
        $irrigation = $_POST['irrigation'];
        $fertilizer = $_POST['fertilizer'];
        $disease = $_POST['disease'];
        $insects = $_POST['insects'];
        $harvest = $_POST['harvest'];
        $seed = $_POST['seed'];
        $soil_land = $_POST['soil_land'];
        $caring = $_POST['caring'];

        date_default_timezone_set('Asia/Dhaka');
        $date = date('Y:m:d h:i:s');

        /*echo $category_id;
        echo $crop_id;
        echo $cultivation;
        echo $irrigation;
        echo $fertilizer;
        echo $disease;
        echo $insects;
        echo $harvest;
        echo $seed;
        echo $soil_land;
        echo $caring;
        echo $date; */


        date_default_timezone_set('Asia/Dhaka');
        $date = date('Y:m:d h:i:s');

        $query = $con->query("insert into crop_info_bank (category_id,crop_id,cultivation_process,irrigation_process,fertilizer_process,disease_manage,insects_manage,harvest_collection,seed_manage,soil_land_select,interim_caring,store_date) values ('$category_id','$crop_id','$cultivation','$irrigation','$fertilizer','$disease','$insects','$harvest','$seed','$soil_land','$caring','$date')");
            if ($query) 
            {
              echo 'Insertion Complete';
            }else
            {
                echo 'Error';
            }

            
    }
    
?>