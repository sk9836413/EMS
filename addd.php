<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head><meta charset="UTF-8">
    <title>Add Salary Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
	

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0"> 
		<label><h2> Add Salary Detail </h2></label>
		
		<tr><div class="form-group"> 
				<td>Emp_ID</td>
				<td><input type="text" name="emp_id" class="form-control" ></td></div>
			</tr>
			<tr><div class="form-group">
				<td>Dept_ID</td>
				<td><input type="text" name="dept_id" class="form-control" ></td></div>
			</tr>
			<tr> <div class="form-group">
				<td>Salary Amount</td>
				<td><input type="text" name="sal_amt" class="form-control" ></td></div>
			</tr>
			<tr><div class="form-group">
				<td>HRA</td>
				<td><input type="text" name="hra" class="form-control" ></td></div>
			</tr>
			<tr> <div class="form-group">
				<td>DA</td>
				<td><input type="text" name="da" class="form-control" ></td></div>
			</tr>
			<tr> <div class="form-group">
				<td>TA</td>
				<td><input type="text" name="ta" class="form-control" ></td></div>
			</tr>
			<tr> <div class="form-group">
				<td>Present Days</td>
				<td><input type="text" name="pres_days" class="form-control" ></td></div>
			</tr>
			<tr> <div class="form-group">
				<td>Leave Days</td>
				<td><input type="text" name="leave_days" class="form-control" ></td></div>
			</tr>
			<tr> <div class="form-group">
				<td>Holidays</td>
				<td><input type="text" name="holidays" class="form-control" ></td></div>
			</tr>
			<tr> <div class="form-group">
				<td>Overtime</td>
				<td><input type="text" name="overtime" class="form-control" ></td></div>
			</tr>
			<tr> <div class="form-group">
				<td>Halftime</td>
				<td><input type="text" name="halftime" class="form-control" ></td></div>
			</tr> 	
			
			<tr> <div class="form-group">
				<td>Expense</td>
				<td><input type="text" name="expense" class="form-control" ></td></div>
			</tr>
			
			<tr> 
				<td></td>
				<td><input type="submit" class="btn btn-primary" name="Submit" value="Add"><br/><br/>
				<a href="../home.php"> <input "TYPE="SUBMIT" class="btn btn-primary" name="Submit" value="Home"></a><br/><br/>
			<a href="view.php"> <input "TYPE="SUBMIT" class="btn btn-primary" name="Submit" value="View Salary Records"></a>
			</td><br/><br/>
			</tr>
			
		</table>
	</form>
</body>
</html>
