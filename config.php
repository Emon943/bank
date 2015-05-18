<?php 
	require_once"dbclass.php";	
	$obj = new dbclass();
	
	$obj->dbHost= 'localhost'; //host name
	$obj->dbUser= 'root'; //databsae username
	$obj->dbPass= 'root123'; //database password
	$obj->dbName= 'bank'; //database name

	$obj->dbConnect();
	
?>