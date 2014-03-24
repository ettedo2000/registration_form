<!DOCTYPE HTML >
<?php
session_start();
/*************************************************************************************************************
*Name: Odette Simons
****************************************************************************************************************/
	$username= $_GET["username"];
	$password = $_GET["password"];

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
h3 		{font-style:bold;
		color:#5c743d;
		font-family:serif;}
h5		{font-style:bold;
		color:#990000;
		font-family:sans-serif;}
.style7 {
	background-color: #600;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	color: #FFF;
}
.style10 {
	border: medium groove #006;
}
</style>
<title>Database Login</title>
<style type="text/css">

</style>
</head>
<body>
<div class="header">
  <!-- end .header -->
</div>

<p>
  <?php

include "dbcon.php";
		
$query = "SELECT * FROM login WHERE username='$username' AND password = '$password'" ;

$username=mysqli_real_escape_string($osconn, $username);

$password=mysqli_real_escape_string($osconn, $password); 

$result = mysqli_query($osconn,$query);

$rec = mysqli_fetch_array($result);
	
	if(($rec['username']==$username)&&($rec['password']==$password))
		{

		include "newsession.php";
		header("location:LogedIn.php?username=$username");
		} 
	
	else 
		{
		echo "<p>Wrong Login. Incorrect User name or Password Please Try Again </p>";
		echo "<br/>";
		echo "<p><strong>username:</strong> $username </p>";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		echo "<p><a href='http://www.doemountain.org/'>Back to Webseit</a></p>"; // link to Doe Mountain Webseit
		}
	
mysqli_close($osconn);
?>
   
</p>

</body>
</html>
