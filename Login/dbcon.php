<?php
/*************************************************************************************************************
*Name: Odette Simons
****************************************************************************************************************/


$osconn = new mysqli('localhost','Doe','*******','Doe');						//Connect to Databas
	
if ($osconn->connect_errno) 															//Error message if connection failed
		{
		 echo "<p>";
		 printf("Connect failed: %s\n", $osconn->connect_error);
		 exit();
		}
	
		
?>