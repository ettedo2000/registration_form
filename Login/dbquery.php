<!DOCTYPE HTML >
<?php

/**********************************************************
*Name: Odette Simons
***********************************************************/

$Last_Name= $_GET["Last_Name"];
$Last_Name= trim ($_GET["Last_Name"]);
$Last_Name = ucfirst (strtolower($Last_Name));
$Last_Name = strip_tags($Last_Name);
$Email = $_GET["Email"];
$Email = trim ($_GET["Email"]);
$Email = strip_tags($Email);
$volunteer = $_GET["volunteer"];
$volunteer1 = $_GET["volunteer1"];
$volunteer2 = $_GET["volunteer2"];
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
table 	{width: 900px; 
		margin: auto;}
h2 		{text-align:center;
		font-style:bold;
		color:#5c743d;
		font-family:serif;
		font-size: 20pt;}
p		{text-align:center;}
</style>
<title>Database Query</title>
</head>
<body>

<table border = "1">
   <thead>
      <tr>
	  
<?php
		include "dbcon.php";													//Connect to Databas if  Last Name is "ALL"
		
		if ($Last_Name == 'All' or $Last_Name == 'all' )
		{
			
		$Last_Name = $osconn->query("SELECT * FROM regform WHERE Last_Name BETWEEN 'A%' AND 'Z%'");		//SQL query

		$query = "SELECT * FROM regform WHERE Last_Name BETWEEN 'A%' AND 'Z%'";

		}
		
		else 
		{

		$query = "SELECT * FROM regform WHERE Last_Name = '$Last_Name' OR Email = '$Email' OR volunteer = '$volunteer' OR volunteer1 = '$volunteer1' OR volunteer2 = '$volunteer2' " ;			//SQL query
		}
	
		


		if($result = mysqli_query($osconn, $query))  															
		{
		if (mysqli_num_rows($result) > 0)																	// If query has more than 1 result output names
			{
			echo "<br><h2> We Found ". mysqli_num_rows($result) . " Volunteers</h2></ br>";
			echo "<p><input type='button' value='Back to Form' onClick='history.go(-1)'></p>";

			$finfo = $result->fetch_fields();															//fetch info from database
		 
			?>
			<br> 
			<?php																						//Loop for header names
			foreach ($finfo as $val) 																
			{
			   echo "<th>". $val->name . "</ th>";
			}
			?>
				</tr>
				</thead>

			<?php

			while ($line = $result->fetch_row()) 														//Ouput Loop of fetched data
			{
			echo "<tr>";   
			foreach ($line as $val) {
			  echo "<td> $val </ td>";
			}    
			echo "</tr>";
		}

		}
		else																							//If query has 0 rows display error message
		{
		echo "<h2> SORRY WE DID NOT FIND ANY VOLUNTEERS WITH THAT NAME</h2>";
		echo "<p> Enter <strong>All</strong> in <strong>Last Name</strong> Filed to display the full List of Volunteers</p>";
		
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		}

}

?>
</table>

<?php

	mysqli_close($osconn);																				//Close connection

?>
</body>
</html>