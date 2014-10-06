<?php
	header('Content-type: text/html; charset=utf-8');
    include("connect.php");
    session_start(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  	<title>Agro Search</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- stylesheets -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/login.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/weatherstyle.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/navstyle.css" />
    <link rel="stylesheet" type="text/css" href="css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="css_infoBank/style.css" />
    <link rel="stylesheet" type="text/css" href="css_infoBank/myown.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
      
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>  
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/all-local.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>

    <style type="text/css">

        label {display: inline;}
    </style>
    
    <script>
    function showCrops() {

        var name = $('#box-1 option:selected').text();
        //this.options[this.selectedIndex].innerHTML
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

   <script>
    function showCategory() {

        var name = $('#box-2 option:selected').text();
        console.log(name);
        if (name == '---') 
        {
            $('#box-3').empty().append('<option value="0">---</option>');
        }
        else
        {
            $('#box-3').empty().append('<option value="0">---</option><option value="1">চাষাবাদ পদ্ধতি</option><option value="2">সেচ পদ্ধতি</option><option value="3">সার ব্যবস্থাপনা</option><option value="4">রোগ-বালাই ব্যবস্থাপনা</option><option value="5">পোকা ব্যবস্থাপনা</option><option value="6">ফসল সংগ্রহ</option><option value="7">বীজ ব্যবস্থাপনা</option><option value="8">জমি ও মাটি নির্বাচন</option><option value="9">অন্তর্বর্তীকালীন পরিচর্যা</option>');
        }
        
    }
   </script> 

   <script>
    function showInfo() {
        var box1 = $('#box-1 option:selected').text();
        var box2 = $('#box-2 option:selected').text();
        var box3 = $('#box-3 option:selected').text();

        if (box1 == '---' || box2 == '---' || box3 == '---')
        {
            alert("Select all options from select box");
        }
        else
        {
            var boxval1 = $('#box-1').val();
            var boxval2 = $('#box-2').val();
            var boxval3 = $('#box-3').val();

            $.ajax({
            type: "POST",
            url: "getCropBankInfo.php",
            data: {categoryID:boxval1,cropID:boxval2,criteria:boxval3},
            //dataType: 'json',
            success: function(data, textStatus, jqXHR)
             {
                $('#information').empty().append(data);
                //document.getElementById("col-2").value = data.b;
                //console.log(data); 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR);
            }
        }); 

        }
       
        
    }
   </script> 

</head>
<body>

    <div id="header">
    	<div id="logo"></div>
    	<div id="nav-bar">
            <div id="upper-part"></div>
            <div id="nav-bar1">
                <div class="container">
                <section class="main">
                <div class="wrapper-demo">
                    <div id="dd" class="wrapper-dropdown-2" tabindex="1">বাংলার ফসল
                        <ul class="dropdown">
                            <?php
                            if (isset($_SESSION['user'])) {
                            echo "<li><a href='crop_info_bank.php'><i class='icon-adjust icon-large'></i>ফসলের পাতা</a></li>";
                            echo "<li><a href='crop_tree_nodes.php'><i class='icon-adjust icon-large'></i>ফসলের পরিচিতি</a></li>";
                            echo "<li><a href='info_update.php'><i class='icon-adjust icon-large'></i>তথ্য হালনাগাদ</a></li>";
                        }
                        else {
                            echo "<li><a href='crop_info_bank.php'><i class='icon-adjust icon-large'></i>ফসলের পাতা</a></li>";
                            echo "<li><a href='crop_tree_nodes.php'><i class='icon-adjust icon-large'></i>ফসলের পরিচিতি</a></li>";
                        }
                        ?>
                        </ul>
                    </div>
                </div>
                </section>
                </div>
            </div>
            <div id="nav-ico1">
                <div class="icon-image1">
                    <a class="button-secondary pure-button" href="mainpage.php#weather-forecast">আবহাওয়া</a>
                </div>
            </div>
            <div id="nav-ico2">
                <div class="icon-image2">
                    <a class="button-secondary pure-button" href="#">আর্কাইভ</a>
                </div>
            </div>
            <div id="nav-bar2">
                <div class="container">
                <section class="main">
                <div class="wrapper-demo">
                    <div id="dd2" class="wrapper-dropdown-2" tabindex="1">কৃষি উপকরন
                        <ul class="dropdown">
                            <li><a href="#agri-tools"><i class="icon-adjust icon-large"></i>কৃষি প্রযুক্তি</a></li>
                            <li><a href="#"><i class="icon-adjust icon-large"></i>কৃষি প্রতিষ্ঠান</a></li>
                        </ul>
                    </div>
                </div>
                </section>
                </div>
            </div>
        </div>
    	<div id="login-system">
            <?php
                if (isset($_SESSION['user'])) {

                    echo "<a id='admin-welcome' class='button-secondary pure-button' href='#b'>";echo $_SESSION['user'];echo "</a>";
                    echo "<a id='admin-logout' class='button-secondary pure-button' href='logout.php?page=crop_info_bank'>লগআউট</a>";
                }
                elseif (isset($_SESSION['userlogin'])) {

                    echo "<a id='admin-welcome' class='button-secondary pure-button' href='#b'>";echo $_SESSION['userlogin'];echo "</a>";
                    echo "<a id='admin-logout' class='button-secondary pure-button' href='logout.php?page=crop_info_bank'>লগআউট</a>";
                }
                else{
                    echo "<a id='admin-login' class='button-secondary pure-button' href='#a'>এডমিন প্রবেশ</a>";
                    echo "<a id='user-login' class='button-secondary pure-button' href='project_reg.php'>সাইট প্রবেশ</a>";
                }
                
            ?>
        </div>	
    </div>

    <div id='info-holder'>
        <!--<form action = "#" method = "post"> -->
        <div id="select-box-holder" class="alert alert-danger fade in">
            <div id="info-title" class="alert alert-error fade in">
                <h4>ফসল নির্বাচন করুন তথ্য পাবার জন্য</h4>
            </div>
            <div id="all-box">
                <div class="box-label"><label>ফসলের ধরন</label></div>
                <div class="box-select">
                    <select id="box-1" onchange="showCrops()">
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
                </div>
                <div class="box-label"><label>ফসলের নাম</label></div>
                <div class="box-select">
                    <select id="box-2" onchange="showCategory()">
                        <option value="0">---</option>
                    </select>
                </div>
                <div class="box-label"><label>তথ্যের বিষয়</label></div>
                <div class="box-select">
                    <select id="box-3">
                        <option value="0">---</option>
                    </select>
                </div>
            </div>
            <div id="button-holder">
                <button type="submit" name='submit' id="filter-button" class="btn btn-primary" onclick="showInfo()">তথ্য দেখুন</button>
            </div>
        </div>
        <!--</form>-->
        <div id="crop-info-holder" class="alert alert-danger fade in" style="overflow-y:auto">
            <p id="information"></p>
        </div> 
    </div>

    <div id="footer">
        <div id="home-logo"></div>
        <div id="all-link">
            <div id="links">
                <ul>
                    <li><a href="">মূলপাতা |</a></li>
                    <li><a href=""> আমাদের সম্পর্কে |</a></li>
                    <li><a href=""> যোগাযোগ</a></li>
                </ul>
            </div>
            <div id="ref-img">
                
                <div id="img-holder">
                    <a href=""><img class="footer-img" src="images/footer_img/ais.png"></a>
                    <a href=""><img class="footer-img" src="images/footer_img/bsb.jpg"></a>
                    <a href=""><img class="footer-img" src="images/footer_img/dae.jpg"></a>
                    <a href=""><img class="footer-img" src="images/footer_img/OWMap.png"></a>
                    <a href=""><img class="footer-img" src="images/footer_img/brri.jpg"></a>
                    <a href=""><img class="footer-img" src="images/footer_img/barc.jpg"></a>
                    <a href=""><img class="footer-img" src="images/footer_img/bari.jpg"></a>
                </div>
            </div>
        </div>
        <div id="top-button"></div>
    </div>
    
    <!-- Popup div for login Form -->
<div id="form" > 
    <form name="login-form" class="login-form" action="admin_login.php" method="post">
    <div id="admin-header">
        <div class="admin-icon"><img id="img-admin" src="images/admin.png"></div>
        <div class="admin-text">Admin Login</div>
    </div>
    <div id="user-part">
        <div class="user-box">
            <div class="user-icon"><img id="img-user" src="images/user.png"></div>
            <div class="text-box">
                <input name="username" type="text" class="input username"  required = "required" placeholder="Username"/><!--END USERNAME-->
            </div>
        </div>
        <div class="user-box">
            <div class="user-icon"><img id="img-pass" src="images/pass.png"></div>
            <div class="text-box">
                <input name="password" type="password" class="input password" required = "required" placeholder="******"/><!--END PASSWORD-->
            </div>
        </div>
    </div>
    <div id="admin-footer">
        <div class="btn-box1">
            <input type="submit" name="submit" value="Login" class="button" /><!--END LOGIN BUTTON-->
        </div>
        <div class="btn-box2">
            <input type="submit" name="submit" value="Close" class="close" /><!--END REGISTER BUTTON-->
        </div>
    </div>  
    </form>
</div>
<!--END WRAPPER-->

 
</body>
</html>
