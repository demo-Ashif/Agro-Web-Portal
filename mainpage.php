<?php

	include("district_info_php.php");
    header('Content-type: text/html; charset=utf-8');
    include("connect.php");
    session_start();
    
    

$results = mysqli_query($con,"SELECT COUNT(*) FROM agri_tools_info");
$get_total_rows = mysqli_fetch_array($results); //total records

//break total records into pages
$pages = ceil($get_total_rows[0]/$item_per_page);   

//create pagination
if($pages > 1)
{
    $pagination = '';
    $pagination .= '<ul class="paginate">';
    for($i = 1; $i<$pages; $i++)
    {
        $pagination .= '<li><a href="#" class="paginate_click" id="'.$i.'-page">'.$i.'</a></li>';
    }
    $pagination .= '</ul>';
}

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
	<link rel="stylesheet" href="css/map.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/qTip.css" type="text/css">
	<link rel="stylesheet" href="css/weatherstyle.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/navstyle.css" />
    <link rel="stylesheet" type="text/css" href="css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="css_infoBank/myown.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/popup.css" />
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    
    
      
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>  
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/raphael.js" charset="utf-8"></script>
	<script type="text/javascript" src="js/g.raphael.js" charset="utf-8"></script>
	<script type="text/javascript" src="js/g.pie.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/path.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/qTip.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/all-local.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/weather.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.newsTicker.js" charset="utf-8"></script>

    <script type="text/javascript">
$(document).ready(function() {
    $("#results").load("fetch_pages.php", {'page':0}, function() {$("#1-page").addClass('active');});  //initial page number to load
    
    $(".paginate_click").click(function (e) {
        
        $("#results").prepend('<div class="loading-indication"><img src="ajax-loader.gif" /> Loading...</div>');
        
        var clicked_id = $(this).attr("id").split("-"); //ID of clicked element, split() to get page number.
        var page_num = parseInt(clicked_id[0]); //clicked_id[0] holds the page number we need 
        
        $('.paginate_click').removeClass('active'); //remove any active class
        
        //post page number and load returned data into result element
        //notice (page_num-1), subtract 1 to get actual starting point
        $("#results").load("fetch_pages.php", {'page':(page_num-1)}, function(){

        });

        $(this).addClass('active'); //add active class to currently clicked element (style purpose)
        
        return false; //prevent going to herf link
    }); 
});
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
                    <a class="button-secondary pure-button" href="#weather-forecast">আবহাওয়া</a>
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
                    echo "<a id='admin-logout' class='button-secondary pure-button' href='logout.php'>লগআউট</a>";
                }
                elseif (isset($_SESSION['userlogin'])) {

                    echo "<a id='admin-welcome' class='button-secondary pure-button' href='#b'>";echo $_SESSION['userlogin'];echo "</a>";
                    echo "<a id='admin-logout' class='button-secondary pure-button' href='logout.php'>লগআউট</a>";
                }
                else{
                    echo "<a id='admin-login' class='button-secondary pure-button' href='#a'>এডমিন প্রবেশ</a>";
                    echo "<a id='user-login' class='button-secondary pure-button' href='project_reg.php'>সাইট প্রবেশ</a>";
                }
                
            ?>
        </div>	
    </div>
    
    <div id="holder">
     	<div id="sidebar">

     		<div id="piechart">
     			<div id="piechart-holder"></div>
     		</div>		
			<div id="ticker">
                <div id="ticker-news">
                    <div id="nt-example1-container">
                        <i class="fa fa-arrow-up" id="nt-example1-prev"></i>
                        <ul id="nt-example1">
                            <?php
                            $sql = $con->query("SELECT news_title FROM recent_news");
                            while($row = $sql->fetch_assoc())
                            {
                                echo "<li>"; echo $row['news_title']; echo "<a href='c#'>";echo " ";echo "Read more...</a></li>";
                            }

                            ?>
                        </ul>
                        <i class="fa fa-arrow-down" id="nt-example1-next"></i>
                    </div>
                </div>
                <div id="ticker-weather">
                    <select id="district-list" onchange = "showWeather()">
                        <option value="0">জেলা নির্বাচন করুন</option>
                    <?php
                            $query = $con->query("Select id,district_eng,district from area_info");
                            while($row = $query->fetch_object())
                            {
                                echo "<option value = '".$row->district_eng."'>".$row->district."</option>";
                                //echo $row['category_id'];
                            }
                        ?>
                    </select>
                </div>
            </div>	
			
        </div>

		<!-- map div start using svg and raphael js -->
        <?php
			require_once 'district_info_html.php';
		?>
    		
    	<!-- map div end using svg and raphael js -->
   
    </div>

    
    <div id="weather-forecast">
    	<div id="wind-hum">
    		<div class="hum"></div>
    		<div class="speed"></div>
    		<div class="direction"></div>
    		<div class="pressure"></div>
    	</div>
    	<div id="icon">
    		<div class="icon-type"></div>
    		<div class="sky"></div>
    	</div>
    	<div id="temp">
    		<div class="temp-value"></div>
    		<div class="temp-title"><p>তাপমাত্রা</p></div>
    	</div>
    	<div id="sun">
    		<div class="rise">
    			<div class="rise-value"></div>
    			<div class="rise-title"><p>সূর্যোদয়</p></div>
    		</div>
    		<div class="set">
    			<div class="set-value"></div>
    			<div class="set-title"><p>সূর্যাস্ত</p></div>
    		</div>
    	</div>
    </div>
	
    <div id="agri-tools">
        <div id="results"></div>
        <?php echo $pagination; ?>
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
<a href="#" class="scrollToTop"></a>

<script type="text/javascript">
        var nt_example1 = $('#nt-example1').newsTicker({
                row_height: 80,
                max_rows: 3,
                duration: 4000,
                prevButton: $('#nt-example1-prev'),
                nextButton: $('#nt-example1-next')
            });
</script>

<script type="text/javascript">
    $(document).ready(function(){
    
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    
});
</script>
 
</body>
</html>
