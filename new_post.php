
<?php
    header('Content-type: text/html; charset=utf-8');
    include("connect.php");   
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  	<title>Agro Search</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- stylesheets -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <script src="js/jquery-1.10.2.min.js"></script>  

    <style type="text/css">
        #post-page{
            margin: auto;
            width: 800px;
        }

        label {display: block;}
    </style>

   <script>
    function showCrops() {

        var name = $('#category-box option:selected').text();
        //this.options[this.selectedIndex].innerHTML
        console.log(name);
        $.ajax({
            type: "POST",
            url: "getCropName.php",
            data: {category:name},
            //dataType: 'json',
            success: function(data, textStatus, jqXHR)
             {
                var opts = $.parseJSON(data);
                $('#crop-box').empty().append('<option value="0">নির্বাচন করুন</option>');
                $.each(opts, function(i,d) {
                    $('#crop-box').append('<option value="' + d.crop_id + '">' + d.crop_name + '</option>');
                    console.log(d.crop_id);
                });    
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR);
            }
        });        
    }
   </script> 


</head>
<body>

    <div id="post-page">
        <form action = "crop_info_insert.php" method = "post">
            <label>Category:</label>
            <select id="category-box" name="category_id" onchange="showCrops()" >
                <option value ="0">নির্বাচন করুন</option>
                <?php
                    $query = $con->query("Select*from categories");
                    while($row = $query->fetch_object())
                    {
                        echo "<option value = '".$row->category_id."'>".$row->category."</option>";
                        //echo $row['category_id'];
                    }
                ?>
            </select>

            <label>Crops:</label>
            <select id="crop-box" name="crop_id"><option value="5">নির্বাচন করুন</option></select>
            <label for="body">চাষাবাদ:</label>
            <textarea id="col-2" name="cultivation" cols=40 rows=5></textarea>
            <label for="body">সেচ:</label>
            <textarea id="col-2" name="irrigation" cols=40 rows=5></textarea>
            <label for="body">সার ব্যবস্থাপনা:</label>
            <textarea id="col-2" name="fertilizer" cols=40 rows=5></textarea>
            <label for="body">রোগ প্রতিকার:</label>
            <textarea id="col-2" name="disease" cols=40 rows=5></textarea>
            <label for="body">পোকা ব্যবস্থাপনা:</label>
            <textarea id="col-2" name="insects" cols=40 rows=5></textarea>
            <label for="body">ফসল সংগ্রহ</label>
            <textarea id="col-2" name="harvest" cols=40 rows=5></textarea>
            <label for="body">বীজ ব্যবস্থাপনা:</label>
            <textarea id="col-2" name="seed" cols=40 rows=5></textarea>
            <label for="body">মাটি ও জমি বাছাই:</label>
            <textarea id="col-2" name="soil_land" cols=40 rows=5></textarea>
            <label for="body">পরিচর্যা:</label>
            <textarea id="col-2" name="caring" cols=40 rows=5></textarea>
            <br />
            <input type="submit" name="submit">
        </form>
    </div>

</body>
</html>


