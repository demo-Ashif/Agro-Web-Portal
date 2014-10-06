<?php
  
  header('Content-type: text/html; charset=utf-8');
  include("connect.php");

  $category = $_POST['category'];

	$sql1 = $con->query("SELECT category_id from categories where category ='".$category."' ");
	$row1= $sql1->fetch_array();

	$sql2 = $con->query("SELECT crop_id,crop_name from crop_category where category_id ='".$row1['category_id']."' ");


	$arr = array();
  while($row2 = $sql2->fetch_assoc())
  {
    $arr[] = $row2;
  }

  echo json_encode($arr);

   

 
?>