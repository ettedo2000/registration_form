<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    <form action="dbform.php" method="get">
<h4 align="center"> Please enter all information on this form </h4>
<table width="957">
	<tr>
		<td width="214"> <strong>First Name: </strong></td>
		<td width="731"><input type="text" name="First_Name" id="First_Name" size="45" /><br />
          <span class="style1">(John)</span> </td>
	</tr>
	<tr>
		<td><strong>Last Name: </strong></td>
		<td><input type="text" name="Last_Name" id="Last_Name" size="45"/> <br />
          <span class="style1">(Doe)</span></td>
	</tr>
	<tr>
		<td> <strong>Email: </strong></td>
		<td><input type="text" name="Email" id="Email" size="45"/><br />
          <span class="style1">(john@email.com)</span> </td>
	</tr>
	<tr>
		<td><strong>Phone Number:</strong></td>
		<td><input type="text" name="Phone" id="Phone" size="30"/><br />
		  <span class="style1">(with area code no spaces ex:4235555555)</span></td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
</table>
<br />
<div><strong>How would you prefer to be contacted?
</strong></div><br />
<?php 

	$contact["Phone"]="Phone";
	$contact["Email"]="Email";
	
?>	
	<tr>
	<td><select name = "contact" id = "contact"></td>
	</tr>

<?php 
		foreach ($contact as $type => $favorite ) 
		{
		echo "<option value=\"$favorite\"> $favorite </option> \n";
		}
		
?>
</select> 
<br/><br/>
<tr>	


<div><strong>Choose the volunteer opportunities you prefer</strong></div><br />

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
	<tr>
	<td><select name = "volunteer" id = "volunteer"></td>
	</tr>

<?php 
		foreach ($volunteer as $work => $favorite ) 
		{
		echo "<option value=\"$favorite\"> $favorite </option> \n";
		}
		
?>
</select> 
	1st choice
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
	<tr>
	<td>
	<select name = "volunteer1" id = "volunteer1"></td>
	</tr>

<?php 
		foreach ($volunteer1 as $work => $favorite ) 
		{
		echo "<option value=\"$favorite\"> $favorite </option> \n";
		}
		
?>
</select> 
2nd choice
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
	<tr>
	<td>
	<select name = "volunteer2" id = "volunteer2"></td>
	</tr>

<?php 
		foreach ($volunteer2 as $work => $favorite ) 
		{
		echo "<option value=\"$favorite\"> $favorite </option> \n";
		}
		
?>
</select> 
3rd choice<br/>
<br/>
<tr>

<div><strong>Choose the volunteer hours you prefer per month</strong></div><br />

<?php 
	
	$time["3 hours"]="3 hours";
	$time["6 hours"]="6 hours";
	$time["9 hours"]="9 hours";
	$time["12 hours"]="12 hours";
	$time["15 hours"]="15 hours";
	$time["15++ hours"]="15+ hours";
?>
	<tr>
	<td><select name = "time" id = "time"></td>
	</tr>

<?php 
		foreach ($time as $hour => $favorite ) 
		{
		echo "<option value=\"$favorite\"> $favorite </option> \n";
		}
		
?>
</select> 
<br/><br/>
<div align="center"><input type="submit" name="button" value="Submit"/>&nbsp;&nbsp;
  <input type="reset" name="Reset" id="Reset" value="Reset" /></div>
</form>
<p></p>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  </div>
  <div class="footer">
    <p><a href="http://www.doemountain.org/">Doe Mountain Website</a> | <a href="dbform.php">Volunteer Registration Form</a> |</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>