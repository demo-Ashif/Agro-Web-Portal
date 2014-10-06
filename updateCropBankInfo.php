<?php
  
  header('Content-type: text/html; charset=utf-8');
  include("connect.php");

  $category_id = $_POST['categoryID'];
  $crop_id = $_POST['cropID'];

  $data1 = $_POST['data1'];
  $data2 = $_POST['data2'];
  $data3 = $_POST['data3'];
  $data4 = $_POST['data4'];
  $data5 = $_POST['data5'];
  $data6 = $_POST['data6'];
  $data7 = $_POST['data7'];
  $data8 = $_POST['data8'];
  $data9 = $_POST['data9'];

  $sql1 = mysqli_query($con,"UPDATE crop_info_bank set cultivation_process = '".$data1."',irrigation_process = '".$data2."',fertilizer_process = '".$data3."',disease_manage = '".$data4."',insects_manage = '".$data5."',harvest_collection = '".$data6."',seed_manage = '".$data7."',soil_land_select = '".$data8."',interim_caring = '".$data9."'  where category_id ='".$category_id."' and crop_id = '".$crop_id."' ");

  $sql = $con->query("SELECT * from crop_info_bank where category_id ='".$category_id."' and crop_id = '".$crop_id."' ");
  $row= $sql->fetch_array();

  echo json_encode(array(
            "a" => $row['cultivation_process'],
            "b" => $row['irrigation_process'],
            "c" => $row['fertilizer_process'],
            "d" => $row['disease_manage'],
            "e" => $row['insects_manage'],
            "f" => $row['harvest_collection'],
            "g" => $row['seed_manage'], 
            "h" => $row['soil_land_select'],
            "i" => $row['interim_caring']
            
          )
        );
 
?>