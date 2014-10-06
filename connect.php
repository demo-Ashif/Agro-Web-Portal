<?php  
//connect.php  
	$con=mysqli_connect("localhost","root","","agri_web");
// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if (!mysqli_set_charset($con, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($con));
} 

$item_per_page = 1;


?>  