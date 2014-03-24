<!DOCTYPE HTML >
<?php
session_start();
/*************************************************************************************************************
*Name: Odette Simons
****************************************************************************************************************/
$formproc='n';
$usernameerror = '';
$passworderror = '';


if(isset($_GET['username']) || isset($_GET['password']))
	{
	$username= $_GET['username'];
	$username=	trim($username); 
	$username = strip_tags($username);
	$password = $_GET['password'];
	$password = trim($password); 
	$password = strip_tags($password);
	
	
		
	if(empty($username) && empty($password))
			{
			$usernameerror='*';
			$username = ''; 
			$passworderror ='*';							//will display empty space wher inpuut is incorect
			$password = '';
			echo "<h3><font color=blue> **Please fill out all fields**</font></h3> ";
			}	
	
	$formproc="y";			
	}
	else
	{
	$username= "";
	$password="";
		}
		
	if ($formproc=="y" and $usernameerror !='*' and $passworderror !='*')
	{
	header("location:http://localhost/DoeMountain/Login/dbLogin.php?username=$username&password=$password");
	}
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Database Login</title>
<style type="text/css">

</style>
</head>
<body>
<div class="header"></a>
  <!-- end .header -->
</div>
<br />
<h3> DATABASE LOGIN FOR DOE MOUNTAIN VOLUENTEER FORM</h3>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">	
<p> This Login is only for administrative personal to Query Database Information of <br />
Volunteer Information. If you are not part of the Doe Mountain Recreation Authority <br />
you are not allowed to enter this Login. Please Return to the Doe Mountain Website for further assistant</p>
<p> <a href='http://www.doemountain.org/'>Back to Website </a> | <a href="../registration-form.php">Volunteer Registration Form</a></p>
<p><strong> User name and Password are Case Sensitive</strong></p>				
<p>User name: 
  <input type="text" name="username" id="username" value="<?php echo $username;?>"/> <?php echo $usernameerror;?></p>
<p>Password: <input type="password" name="password" id="password" value="<?php echo $password;?>"/> <?php echo $passworderror;?></p>
<br/>
<input name="Login" type ="submit" id="Login" value="Login">

</body>
</html>