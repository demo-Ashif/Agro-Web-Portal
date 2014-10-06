<?php

include("connect.php"); //include config file

//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//validate page number is really numaric
if(!is_numeric($page_number)){die('Invalid page number!');}

//get current starting point of records
$position = ($page_number * $item_per_page);

//Limit our results within a specified range. 
$results = mysqli_query($con,"SELECT * FROM agri_tools_info ORDER BY id ASC LIMIT $position, $item_per_page");

//output results from database

echo '<ul class="page_result">';
while($row = mysqli_fetch_array($results))
{
	echo "<div id='tool_img'>";
	echo "<img src=".$row['photo_dir']." style='height:260px; width:250px;'>";
	echo "</div>";

	echo '<li id="item"> <span class="page_name">'.$row["title"].'</span><span class="page_message">'.$row["post"].'</span></li>';
	
}
echo '</ul>';
?>

