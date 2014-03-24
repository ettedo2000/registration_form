<!DOCTYPE HTML>
<?php
/*********************************************************************************
*Name: Odette Simons
*Date: 05/15/2013
*Project: Doe Mountain Volunteer Registration Form
***********************************************************************************/
	$First_Name = $_GET["First_Name"];
	$First_Name = trim($_GET['First_Name']);		//Will trim white spaces before and after text
	$First_Name = ucfirst (strtolower($First_Name));	//Will convert input of first letter of Name to uppercase
	$First_Name = strip_tags($First_Name);		//This function return a string with HTML and PHP tags stripped from a given string
	$Last_Name= $_GET["Last_Name"];
	$Last_Name= trim ($_GET["Last_Name"]);
	$Last_Name = ucfirst (strtolower($Last_Name));
	$Last_Name = strip_tags($Last_Name);
	$Email = $_GET["Email"];
	$Email = trim ($_GET["Email"]);
	$Email = strip_tags($Email);
	$Phone = $_GET["Phone"];
	$Phone = trim ($_GET["Phone"]);
	$Phone = strip_tags($Phone);
	$contact = $_GET["contact"];
	$volunteer = $_GET["volunteer"];
	$volunteer1 = $_GET["volunteer1"];
	$volunteer2 = $_GET["volunteer2"];
	$time = $_GET["time"];
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Registration</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Volunteer Registration Form</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #FFFFFF;
}
.style1 {
	font-size: 12px;
	font-style: oblique;
}
</style>
</head>

<body>

<div class="container">
  <div class="header">
    <p><a href="http://www.doemountain.org/"><img src="Images/header2.png" width="873" height="145" alt="logo" /></a></p>
  </div><!-- end .header -->
  <div class="content">
  <h2 class="style2"> DOE MOUNTAIN VOLUNTEER REGISTRATION FORM </h2>
  <br />


<?php
	if(empty($First_Name) || empty($Last_Name)|| empty($Email) || empty($Phone) ) 			//All fields are submitted with data.If empty sent Error message
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p> You need to fill out all Information</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>"; // Return button to registration page
		exit();
		}
	else if (is_numeric($First_Name)|| is_numeric($Last_Name))					//Names are are not numeric. If numeric sent Error message
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can not input a numeric values in following Fileds</p>\n";
		echo "<p>First Name, Last Name, Contact Prefrenc, Volunteer work</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if (strlen($First_Name) > 20)				//First Name can only be 20 characters long		
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 20 charachters for First Name!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if (strlen ($Last_Name) > 30)					// last Name can only be 30 characters long						
		{															
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 30 charachters for Last Name!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		
		}
	else if (strlen ($Email) > 55)						//Email can only be 55 characters long								
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 55 charachters for Email!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if (!is_numeric ($Phone))					//Phone number can only be numeric	
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only add numeric values with no spaces (4235555555)!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
		
	else if (strlen ($Phone) > 10)					//Phone number can be 10 numbers long	
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 10 charachters for Phone number with no spaces (4235555555)!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if(!empty($Email))
		{
			if (!filter_var($Email, FILTER_VALIDATE_EMAIL))			//If Email is not correct return error message
			{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You entred an incorect Email (jon@email.com)!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
			}	
		}
	
										

include "dbcon.php";	//Conect to Database with external file


$query = "INSERT INTO regform VALUES('$First_Name','$Last_Name','$Email','$Phone','$contact','$volunteer','$volunteer1','$volunteer2','$time')";
 	//Insert information into MySQL Database

$insertion_result = mysqli_query($osconn, $query);

if(!$insertion_result) // If Insert did not work 
	{
	echo "<p>Sorry! Something went wrong with your entry.</p>";
	echo "<p>Please make sure you have not registered before with the same Email address</p>";
	echo "<p>Return to registration form. </p>";
	echo "<br/>";
	echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
	
	}
	else // If Insert worked print out Information
	{
	echo "<h4> Thank you for your interest!</h4> </p>\n";
	echo "<p>Although Doe Mountain Recreation Area does not yet have a formally organized volunteer network,<br />
			we are currently simply gathering information so we can get an idea of the kind of assistance the community is		 			willing to contribute.</p>\n";
	echo "<br/>";
	echo "<h4>Following information has been entered in our database </h4>\n";
	echo "<p><b> First Name: </b>$First_Name </p>\n";
	echo "<p><b> Last Name: </b>$Last_Name </p>\n";
	echo "<p><b> Email: </b>$Email </p>\n";
	echo "<p><b> Phone: </b>$Phone </p>\n";
	echo "<p><b> Preferred Contact: </b>$contact </p>\n";
	echo "<p><b> Volunteer Work: </b>$volunteer </p>\n";
	echo "<p><b> Volunteer Work 2nd: </b>$volunteer1 </p>\n";
	echo "<p><b> Volunteer Work 3rd: </b>$volunteer2 </p>\n";
	echo "<p><b> Time Volunteering: </b>$time </p>\n";
	echo "<br/>";
	
	echo "<p><a href='http://www.doemountain.org/'>Back to Webseit</a></p>"; // link to Doe Mountain Webseit
	}
	
mysqli_close($osconn); // Disconect Database conecction
?>
<h4 style="color:#090"><i> Thank you! Doe Mountain Recreation Authority </i></h4>
 </div>
  <div class="footer">
    <p><a href="http://www.doemountain.org/">Doe Mountain Website</a> | <a href="dbform.php">Volunteer Registration Form</a> |</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
