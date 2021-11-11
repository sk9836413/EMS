<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM salary ORDER BY emp_id DESC"); 
?>
<html>
<head>	<meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body><tr> 
				<td></td>
				<td><a href="../home.php"> <input "TYPE="SUBMIT" class="btn btn-primary" name="Submit" value="Home"></a><br/><br/>
			<a href="addd.php"> <input "TYPE="SUBMIT" class="btn btn-primary" name="Submit" value="Add New Data"></a>
			</td><br/><br/>
			</tr>
			

<form name="frmBookSearch" action="searchByempid.php" method="post">
Search By Emp_ID :
<input type="text" name="emp_id" placeholder="Enter Employee ID">
<input type="submit" name="submit" value="Submit">
</form>


	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Emp_ID</td>
		<td>Dept_ID</td>
		<td>Salary Amount</td>
		<td>HRA</td>
		<td>DA</td>
		<td>TA</td>
		<td>Present Days</td>
		<td>Leave Days</td>
		<td>Holidays</td>
		<td>overtime</td>
		<td>Halftime</td>
		<td>Expense</td>
		<td>Gross Salary</td>
	</tr>
	<?php 
		while($res = mysqli_fetch_array($result)) 
		{ 		
		echo "<tr>";
		echo "<td>".$res['emp_id']."</td>";
		echo "<td>".$res['dept_id']."</td>";
		echo "<td>".$res['sal_amt']."</td>";
		echo "<td>".$res['hra']."</td>";
		echo "<td>".$res['da']."</td>";
		echo "<td>".$res['ta']."</td>";
		echo "<td>".$res['pres_days']."</td>";
		echo "<td>".$res['leave_days']."</td>";
		echo "<td>".$res['holidays']."</td>";
        echo "<td>".$res['overtime']."</td>";
        echo "<td>".$res['halftime']."</td>";
        echo "<td>".$res['expense']."</td>";
		echo "<td>".$res['gr_sal']."</td>";
		//echo "<td> <a href=\"delete.php?emp_id=$res[emp_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		//to add edit option
		//<a href=\"saledit.php?emp_id=$res[emp_id]\">Edit</a> |
	   }
	?>
	</table>
</body>
</html>