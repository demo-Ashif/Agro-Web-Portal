<?php

	include("connect.php");

	$data1 = $_POST['data1'];
	$data2 = $_POST['data2'];
	$data3 = $_POST['data3'];
	$data4 = $_POST['data4'];
	$data5 = $_POST['data5'];
	$data6 = $_POST['data6'];
	$data7 = $_POST['data7'];
	$data8 = $_POST['data8'];
	$data9 = $_POST['data9'];
	$data10 = $_POST['data10'];
	$data11 = $_POST['data11'];
	$data12 = $_POST['data12'];
	$data13 = $_POST['data13'];
	$data14 = $_POST['data14'];

	$district = $_POST['district'];

	

	$sql1 = mysqli_query($con,"UPDATE area_info set agri_zone = '".$data1."',land = '".$data2."',avg_produce = '".$data3."',max_produce = '".$data4."',min_produce = '".$data5."',crops = '".$data6."',soil_type = '".$data7."',fertile_class = '".$data8."',irrigation_process = '".$data9."',avg_rain = '".$data10."',avg_temp = '".$data11."',avg_max_temp = '".$data12."',avg_min_temp = '".$data13."',avg_hum = '".$data14."'  where district = '".$district."' ");

	$sql2 = mysqli_query($con,"SELECT * from area_info where district ='".$district."' ");

	$row=mysqli_fetch_array($sql2);
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