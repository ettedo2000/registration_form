<!DOCTYPE HTML >
<?php
session_start();
/*************************************************************************************************************
*Name: Odette Simons
****************************************************************************************************************/
$username= $_GET["username"];

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Database Query</title>
<style type="text/css">

</style>
</head>
<body>
<div class="header"><!-- end .header -->
</div>

  <?php

include "dbcon.php";						//Connect to Databas
include "newsession.php";
echo "<h3> Welcome $username </h3>";
mysqli_close($osconn);
?>
<p> <a href='http://www.doemountain.org/'>Home </a> | <a href="../registration-form.php">Volunteer Registration Form</a> | <a href="Logout.php">Log out</a></p>
 <h2 class="style2">SEARCH DATABASE</h2>
 <p>	Enter <strong>All</strong> in <strong>Last Name</strong> Filed to display the full List of Volunteers</p>
 
<!-- start of Form-->
<form action="dbquery.php" method="get">

<table width="755">

	<tr>
		<td height="31"><strong>Last Name: </strong></td>
	  <td><input type="text" name="Last_Name" id="Last_Name" size="45"/> <br /></td>
	</tr>
	<tr>
		<td> <strong>Email: </strong></td>
		<td><input type="text" name="Email" id="Email" size="45"/><br /></td>
	</tr>
    <tr>
    <td><strong>Volunteer opportunities:</strong></td>

<td><p>For an accurate listing choose the same category in all 3 choices.</p>
<p>
  <?php 
	$volunteer["Choose Work"]="Choose Work";
	$volunteer["Miscellaneous Office"]="Miscellaneous Office Work";
	$volunteer["Database Management"]="Database Management";
	$volunteer["Cleaning"]="Cleaning";
	$volunteer["Equestrian Trail Maintenance"]="Equestrian Trail Maintenance";
	$volunteer["OHV Trail Maintenance"]="OHV Trail Maintenance";
	$volunteer["OHM Trail Maintenance"]="OHM Trail Maintenance";
	$volunteer["Hiking Trail Maintenance"]="Hicking Trail Maintenance";
	$volunteer["Mountain Biking Trail Maintenance"]="Mountain Biking Trail Maintenance";
	$volunteer["Landscaping"]="Landscaping";
?>
  
  <select name = "volunteer" id = "volunteer">
    
    
    <?php 
		foreach ($volunteer as $work => $favorite ) 
		{
		echo "<option value=\"$favorite\"> $favorite </option> \n";
		}
		
?>
  </select>

	1st choice</p>
    <p>
<?php 
	$volunteer1["none"]="none";
	$volunteer1["Miscellaneose Office"]="Miscellaneous Office Work";
	$volunteer1["Database Management"]="Database Management";
	$volunteer1["Cleaning"]="Cleaning";
	$volunteer1["Equestrian Trail Maintenance"]="Equestrian Trail Maintenance";
	$volunteer1["OHV Trail Maintenance"]="OHV Trail Maintenance";
	$volunteer1["OHM Trail Maintenance"]="OHM Trail Maintenance";
	$volunteer1["Hiking Trail Maintenance"]="Hicking Trail Maintenance";
	$volunteer1["Mountain Biking Trail Maintenance"]="Mountain Biking Trail Maintenance";
	$volunteer1["Landscaping"]="Landscaping";
?>
	
	<select name = "volunteer1" id = "volunteer1">

<?php 
		foreach ($volunteer1 as $work => $favorite ) 
		{
		echo "<option value=\"$favorite\"> $favorite </option> \n";
		}
		
?>
</select> 
2nd choice</p><p>
<?php 
	$volunteer2["none"]="none";
	$volunteer2["Miscellaneous Office"]="Miscellaneose Office Work";
	$volunteer2["Database Management"]="Database Management";
	$volunteer2["Cleaning"]="Cleaning";
	$volunteer2["Equestrian Trail Maintenance"]="Equestrian Trail Maintenance";
	$volunteer2["OHV Trail Maintenance"]="OHV Trail Maintenance";
	$volunteer2["OHM Trail Maintenance"]="OHM Trail Maintenance";
	$volunteer2["Hiking Trail Maintenance"]="Hicking Trail Maintenance";
	$volunteer2["Mountain Biking Trail Maintenance"]="Mountain Biking Trail Maintenance";
	$volunteer2["Landscaping"]="Landscaping";
?>
	
	<select name = "volunteer2" id = "volunteer2">

<?php 
		foreach ($volunteer2 as $work => $favorite ) 
		{
		echo "<option value=\"$favorite\"> $favorite </option> \n";
		}
		
?>
</select> 
3rd choice</p>

</td> </tr>

</table>
<br />

<tr>
  <div><input type="submit" name="button" value="Query"/>&nbsp;&nbsp;
    <input type="reset" name="Reset" id="Reset" value="Reset" /></div>


<tr>
</form>
</body>
</html>