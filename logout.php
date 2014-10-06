<?php


    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['userlogin']);

    $pagename = $_GET['page'] ;

    if ($pagename == 'crop_info_bank') 
    {
    	header('location:crop_info_bank.php');
    }elseif ($pagename == 'crop_tree_nodes') 
    {
    	header('location:crop_tree_nodes.php');
    }else{
    	header('location:mainpage.php');
    }

	
?>