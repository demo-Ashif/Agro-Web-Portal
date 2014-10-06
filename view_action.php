<?php

	include("connect.php");

	$district = $_POST['district'];

$sql = mysqli_query($con,"SELECT * from area_info where district ='".$district."' ");

$row=mysqli_fetch_array($sql);
echo json_encode(array(
 						"a" => $row['district'],
 						"b" => $row['agri_zone'],
 						"c" => $row['land'],
 						"d" => $row['avg_produce'],
 						"e" => $row['max_produce'],
 						"f" => $row['min_produce'],
 						"g" => $row['crops'], 
 						"h" => $row['soil_type'],
 						"i" => $row['fertile_class'],
 						"j" => $row['irrigation_process'], 
 						"k" => $row['avg_rain'],
 						"l" => $row['avg_temp'],
 						"m" => $row['avg_max_temp'], 
 						"n" => $row['avg_min_temp'],
 						"o" => $row['avg_hum']
 						
 					)
 				);
 

?>