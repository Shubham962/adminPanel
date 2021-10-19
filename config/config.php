<?php
define('BASE_URL', 'http://localhost/adminPanel');
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbName="shubhamfirst";
	$con = mysqli_connect($serverName,$userName,$password,$dbName);
	mysqli_select_db($con,$dbName);
	if($con)
	{
      //  echo "Db connected";
	}
	else
	{
		echo "Connection Fail!";
	}
?>