<?php
  
  header('Content-type: text/html; charset=utf-8');
  include("connect.php");

  $category_id = $_POST['categoryID'];
  $crop_id = $_POST['cropID'];
  $criteria = $_POST['criteria'];

  if ($criteria == 1)
  {
    $criteriaDB = 'cultivation_process';
  }
  elseif ($criteria == 2) {
    $criteriaDB = 'irrigation_process';
  }
  elseif ($criteria == 3) {
    $criteriaDB = 'fertilizer_process';
  }
  elseif ($criteria == 4) {
    $criteriaDB = 'disease_manage';
  }
  elseif ($criteria == 5) {
    $criteriaDB = 'insects_manage';
  }
  elseif ($criteria == 6) {
    $criteriaDB = 'harvest_collection';
  }
  elseif ($criteria == 7) {
    $criteriaDB = 'seed_manage';
  }
  elseif ($criteria == 8) {
    $criteriaDB = 'soil_land_select';
  }
  elseif ($criteria == 9) {
    $criteriaDB = 'interim_caring';
  }

	$sql1 = $con->query("SELECT $criteriaDB from crop_info_bank where category_id ='".$category_id."' and crop_id = '".$crop_id."' ");
	$row1= $sql1->fetch_array();

  echo $row1[$criteriaDB];
 
?>