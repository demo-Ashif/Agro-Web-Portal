
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  	<title>Agro Search</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- stylesheets -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css_infoBank/bootstrap.css" type="text/css" media="screen" />
    
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>    

</head>
<body>
    <form role="form" enctype="multipart/form-data" action="store_tools_info2.php" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <textarea name="title" id="tbox1" class="form-control" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="post">Description</label>
            <textarea name="description" id="tbox1" class="form-control" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" name="photoname" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Check me out
            </label>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>

    <img src="images/tools_img/drum_seeder.jpg">
    
</body>
</html>
