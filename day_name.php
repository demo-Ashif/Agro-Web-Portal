<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />  
	<title>example-DAYNAME-function - php mysql examples | w3resource</title>  
</head>  
<body>  
	<?php  
		echo "<h2>Extracting name of the day from Date</h2>";  
		
		include("connect.php");  
		$result = mysql_query("SELECT DAYNAME('2014-01-20')");  
		while($row=mysql_fetch_array($result))  
		{  
			 
			echo $row["DAYNAME('2014-01-20')"] ;  
			 
		}  

?>  
</body>  
</html>  
