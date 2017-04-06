<?php 
session_start();
error_reporting(0);
//ini_set('error_reporting', E_ALL);
include('database/config.php');
include_once 'functions.php';
$user = new User();


	  $tid = $_GET["id"];
  
	  $sql = "DELETE FROM tempcart WHERE MemId = '" .$_SESSION["tempuser"] . "' and Tempid = '$tid'";
	  mysql_query($sql);
      //header("Location:viewcart.php");
  
   ?>
  <script type="text/javascript">
   location.href='view_cart.php';
   </script>