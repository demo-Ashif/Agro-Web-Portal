<?php
  
  header('Content-type: text/html; charset=utf-8');
  include("connect.php");

  $category_id = $_POST['categoryID'];
  $crop_id = $_POST['cropID'];

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