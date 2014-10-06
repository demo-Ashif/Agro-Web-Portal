<?php
  
  header('Content-type: text/html; charset=utf-8');
  include("connect.php");

	$sql = $con->query("SELECT news_title FROM recent_news");

	$arr = array();
  while($row = $sql->fetch_assoc())
  {
    //$arr[] = $row;
    echo $row['news_title'];
    echo "<br>";
  }


   

 
?>