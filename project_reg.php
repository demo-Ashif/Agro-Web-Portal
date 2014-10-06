<?php
    header('Content-type: text/html; charset=utf-8');
    include("connect.php");

    session_start();

    if(isset($_POST['signupsubmit']))
    {
        $usernamesignup = $_POST['usernamesignup'];
        $passwordsignup = $_POST['passwordsignup'];
        $passwordsignup_confirm = $_POST['passwordsignup_confirm'];
        $emailsignup = $_POST['emailsignup'];


        $usernamesignup = strip_tags($usernamesignup);
        $usernamesignup = $con->real_escape_string($usernamesignup);

        $passwordsignup = strip_tags($passwordsignup);
        $passwordsignup = $con->real_escape_string($passwordsignup);
        $passwordsignup = md5($passwordsignup);

        $passwordsignup_confirm = strip_tags($passwordsignup_confirm);
        $passwordsignup_confirm = $con->real_escape_string($passwordsignup_confirm);
        $passwordsignup_confirm = md5($passwordsignup_confirm);

        date_default_timezone_set('Asia/Dhaka');
        $date = date('Y:m:d h:i:s');

            $query = $con->query("insert into users (username,password,email_add,joined,type) values ('$usernamesignup','$passwordsignup','$emailsignup','$date','user')");
            if ($query) 
            {
              header('location:project_reg.php');
            }else
            {
                echo "Error";
            }

    }

    if(isset($_POST['loginsubmit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        $username = strip_tags($username);
        $username = $con->real_escape_string($username);

        $password = strip_tags($password);
        $password = $con->real_escape_string($password);
        $password = md5($password);

            $query = $con->query("select * from users where username = '$username' and password = '$password'");
            $row = $query->fetch_array();

            $_SESSION['userlogin'] = $row['username'];
            header('location:mainpage.php');

    }
?>



<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
   <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css_reg/demo.css" />
        <link rel="stylesheet" type="text/css" href="css_reg/style.css" />
		<link rel="stylesheet" type="text/css" href="css_reg/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    
                </a>
                <span class="right">
                    
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="project_reg.php" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. abc!123" /> 
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" name="loginsubmit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
                                    <a href="mainpage.php" class="to_register">Home</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="project_reg.php" autocomplete="on" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="myusername" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="myemail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg.abc!123"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. abc!123"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="signupsubmit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Log in </a>
                                    <a href="mainpage.php" class="to_register"> Home </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>