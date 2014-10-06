<?php
    header('Content-type: text/html; charset=utf-8');
    include("connect.php"); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/view-update.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css_infoBank/myown.css" />

	<script src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>

	<script type="text/javascript">
	function getdetails() {

		$('#loader').hide();
        $('#updated').hide();

		var box1 = $('#box-1 option:selected').text();
        var box2 = $('#box-2 option:selected').text();

        if (box1 == '---' || box2 == '---')
        {
            alert("Select all options from select box");
        }
        else
        {
            var boxval1 = $('#box-1').val();
            var boxval2 = $('#box-2').val();

            $.ajax({
            type: "POST",
            url: "viewCropBankInfo.php",
            data: {categoryID:boxval1,cropID:boxval2},
            dataType: 'json',
            success: function(data, textStatus, jqXHR)
             {
                document.getElementById("tbox1").value = data.a;
                document.getElementById("tbox2").value = data.b;
                document.getElementById("tbox3").value = data.c;
                document.getElementById("tbox4").value = data.d;
                document.getElementById("tbox5").value = data.e;
                document.getElementById("tbox6").value = data.f;
                document.getElementById("tbox7").value = data.g;
                document.getElementById("tbox8").value = data.h;
                document.getElementById("tbox9").value = data.i; 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR);
            }
        }); 

        }
 		
	}
</script>

<script type="text/javascript">

    function updatedetails() {

        var boxval1 = $('#box-1').val();
        var boxval2 = $('#box-2').val();

        var data1 = document.getElementById("tbox1").value;
        var data2 = document.getElementById("tbox2").value; 
        var data3 = document.getElementById("tbox3").value; 
        var data4 = document.getElementById("tbox4").value; 
        var data5 = document.getElementById("tbox5").value; 
        var data6 = document.getElementById("tbox6").value;
        var data7 = document.getElementById("tbox7").value;
        var data8 = document.getElementById("tbox8").value;
        var data9 = document.getElementById("tbox9").value; 

        var district = $('#district-box').val();
        $('#loader').show();
        $.ajax({
            type: "POST",
            url: "updateCropBankInfo.php",
            data: {categoryID:boxval1,cropID:boxval2,data1:data1,data2:data2,data3:data3,data4:data4,data5:data5,data6:data6,data7:data7,data8:data8,data9:data9},
            dataType: 'json',
            success: function(data, textStatus, jqXHR)
             {
                $('#loader').hide();
                $('#updated').show();

                document.getElementById("tbox1").value = data.a;
                document.getElementById("tbox2").value = data.b;
                document.getElementById("tbox3").value = data.c;
                document.getElementById("tbox4").value = data.d;
                document.getElementById("tbox5").value = data.e;
                document.getElementById("tbox6").value = data.f;
                document.getElementById("tbox7").value = data.g;
                document.getElementById("tbox8").value = data.h;
                document.getElementById("tbox9").value = data.i;
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log("Some error happened");
            }
        });
        
        
    }
</script>

<script type="text/javascript">
    function showCrops() {

        var name = $('#box-1 option:selected').text();
        console.log(name);
        $.ajax({
            type: "POST",
            url: "getCropInfo.php",
            data: {category:name},
            //dataType: 'json',
            success: function(data, textStatus, jqXHR)
             {
                var opts = $.parseJSON(data);
                $('#box-2').empty().append('<option value="0">---</option>');
                $('#box-3').empty().append('<option value="0">---</option>');
                $.each(opts, function(i,d) {
                $('#box-2').append('<option value="' + d.crop_id + '">' + d.crop_name + '</option>');
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
	<div id="header">
		<nav class="navbar navbar-default " role="navigation">
  			<div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="mainpage.php">মূলপাতা</a>
    			</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li ><a href="info_update.php">জেলা তথ্য</a></li>
        			<li ><a href="crop_infobank_update.php">তথ্য ব্যাংক</a></li>
        			<li><a href="recent_news_update.php">কৃষি নিউজ</a></li>
                    <li class="active"><a href="#b">প্রযুক্তি তথ্য</a></li>
  					<!--<li class="dropdown">
         				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          				<ul class="dropdown-menu">
           					<li><a href="#">Action</a></li>
          					<li><a href="#">Another action</a></li>
            				<li><a href="#">Something else here</a></li>
            				<li class="divider"></li>
            				<li><a href="#">Separated link</a></li>
            				<li class="divider"></li>
            				<li><a href="#">One more separated link</a></li>
          				</ul>
        			</li> -->
      			</ul>
      		<form class="navbar-form navbar-left" role="search">
        	<div class="form-group">
          		<input type="text" class="form-control" placeholder="খুঁজুন">
        	</div>
        		<button type="submit" class="btn btn-default">Submit</button>
      		</form>
      		<ul class="nav navbar-nav navbar-right">
        		<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://placehold.it/20x20" alt="Profile Image" style="display: inline-block !important"/><b class="caret grey"></b></a>
          			<ul class="dropdown-menu">
            			<li><a href="#">Action</a></li>
            			<li><a href="#">Another action</a></li>
            			<li><a href="#">Something else here</a></li>
            			<li class="divider"></li>
            			<li><a href="#">Separated link</a></li>
          			</ul>
        		</li>
      		</ul>
    		</div><!-- /.navbar-collapse -->
  			</div><!-- /.container-fluid -->
  		</nav>
	</div>

	<div class="hero-unit">
    	<div class="container">
    		<div id="info-title" class="alert alert-success fade in">
                <h4>ফসল নির্বাচন করুন তথ্য দেখার এবং হালনাগাদ করবার জন্য</h4>
            </div>
    		<div class="row">
    			<h3><label class="col-md-3 label label-primary">ফসল নির্বাচন</label></h3>
    			<div class="col-md-6">
    				<select id="box-1" class="input-sm" onchange="showCrops()">
                        <option value="0">---</option>
                        <?php
                            $query = $con->query("Select*from categories");
                            while($row = $query->fetch_object())
                            {
                                echo "<option value = '".$row->category_id."'>".$row->category."</option>";
                                //echo $row['category_id'];
                            }
                        ?>
                    </select>
                    <select id="box-2" class="input-sm" >
                        <option value="0">---</option>
                    </select>
                    <button type="submit" name='submit' id="filter-button" class="btn btn-primary " onclick="getdetails()">তথ্য দেখুন</button>
    			</div>
    		</div>
    		
    		<div class="row">
    			<h3><label class="label-des col-md-3 label label-primary">চাষাবাদ পদ্ধতি</label></h3>
    			<div class="col-md-6">
    				<textarea id="tbox1" class="form-control" rows="2"></textarea>
    			</div>
    		</div>
    		<div class="row">
    			<h3><label class="label-des col-md-3 label label-primary">সেচ ব্যবস্থাপনা</label></h3>
    			<div class="col-md-6">
    				<textarea id="tbox2" class="form-control" rows="2"></textarea>
    			</div>
    		</div>
    		<div class="row">
    			<h3><label class="label-des col-md-3 label label-primary">সার ব্যবস্থাপনা</label></h3>
    			<div class="col-md-6">
    				<textarea id="tbox3" class="form-control" rows="2"></textarea>
    			</div>
    		</div>
    		<div class="row">
    			<h3><label class="label-des col-md-3 label label-primary">রোগ ব্যবস্থাপনা</label></h3>
    			<div class="col-md-6">
    				<textarea id="tbox4" class="form-control" rows="2"></textarea>
    			</div>
    		</div>
    		<div class="row">
    			<h3><label class="label-des col-md-3 label label-primary">পোকা ব্যবস্থাপনা</label></h3>
    			<div class="col-md-6">
    				<textarea id="tbox5" class="form-control" rows="2"></textarea>
    			</div>
    		</div>
    		<div class="row">
    			<h3><label class="label-des col-md-3 label label-primary">ফসল সংগ্রহ</label></h3>
    			<div class="col-md-6">
    				<textarea id="tbox6" class="form-control" rows="2"></textarea>
    			</div>
    		</div>
    		<div class="row">
    			<h3><label class="label-des col-md-3 label label-primary">বীজ ব্যবস্থাপনা</label></h3>
    			<div class="col-md-6">
    				<textarea id="tbox7" class="form-control" rows="2"></textarea>
    			</div>
    		</div>
    		<div class="row">
    			<h3><label class="label-des col-md-3 label label-primary">জমি ও মাটি নির্বাচন</label></h3>
    			<div class="col-md-6">
    				<textarea id="tbox8" class="form-control" rows="2"></textarea>
    			</div>
    		</div>
    		<div class="row">
    			<h3><label class="label-des col-md-3 label label-primary">অন্তর্বর্তীকালীন পরিচর্যা</label></h3>
    			<div class="col-md-6">
    				<textarea id="tbox9" class="form-control" rows="2"></textarea>
    			</div>
    		</div>
			<div class="row">
				<h3><label id="no-label" class="label-des col-md-3 label label-primary">Primary2</label></h3>
				<div class="col-md-6">
					<button type="submit" name='submit' id="filter-button" class="btn btn-success " onclick="updatedetails()">তথ্য হালনাগাদ</button>
                    <img id="loader" src="images/loader.gif" style="height:30px; width:30px; display:none;">
                    <img id="updated" src="images/success.png" style="height:25px; width:25px; display:none;">
				</div>  
            </div>
    	</div>
	</div>

    <div id="header">
        <nav class="navbar navbar-default " role="navigation">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
                </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#b">Link</a></li>
                    <li><a href="#c">Link</a></li>
                    <li><a href="#d">Link</a></li>
                </ul>
            
            
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
	
</body>
</html>