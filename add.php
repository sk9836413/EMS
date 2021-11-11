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
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");


if(isset($_POST['Submit'])) {	
    $emp_id     = mysqli_real_escape_string($mysqli, $_POST['emp_id']);
	$dept_id    = mysqli_real_escape_string($mysqli, $_POST['dept_id']);
	$sal_amt    = mysqli_real_escape_string($mysqli, $_POST['sal_amt']);
	$hra        = mysqli_real_escape_string($mysqli, $_POST['hra']);
	$da         = mysqli_real_escape_string($mysqli, $_POST['da']);
	$ta         = mysqli_real_escape_string($mysqli, $_POST['ta']);
	$pres_days  = mysqli_real_escape_string($mysqli, $_POST['pres_days']);
	$leave_days = mysqli_real_escape_string($mysqli, $_POST['leave_days']);
	$holidays   = mysqli_real_escape_string($mysqli, $_POST['holidays']);
	$overtime   = mysqli_real_escape_string($mysqli, $_POST['overtime']);
	$halftime   = mysqli_real_escape_string($mysqli, $_POST['halftime']);
	$expense    = mysqli_real_escape_string($mysqli, $_POST['expense']);
	$gr_sal		=$hra+$da+$ta+$sal_amt;
		
	// checking empty fields
	if(empty($emp_id) || empty($dept_id) || empty($sal_amt)|| empty($hra) || empty($da) || empty($ta) || empty($pres_days) ||  empty($leave_days) || empty($holidays) || empty($overtime) || empty($halftime) || empty($expense)) 
	{
		if(empty($emp_id)) {
			echo "<font color='red'>Emp_ID field is empty.</font><br/>";
		}
			if(empty($dept_id)) {
			echo "<font color='red'>Dept_ID field is empty.</font><br/>";	
		}
		if(empty($sal_amt)) {
			echo "<font color='red'>Salary Amount field is empty.</font><br/>";	
		}
		if(empty($hra)) {
			echo "<font color='red'>HRA field is empty.</font><br/>";
		}
		if(empty($da)) {
			echo "<font color='red'>DA field is empty.</font><br/>";
		}
		if(empty($ta)) {
			echo "<font color='red'>TA field is empty.</font><br/>";
		}
		
		if(empty($pres_days)) {
			echo "<font color='red'>Present Days field is empty.</font><br/>";
		}
		if(empty($leave_days)) {
			echo "<font color='red'>Leave Days field is empty.</font><br/>";
		}
			
		if(empty($holidays)) {
			echo "<font color='red'>Holidays field is empty.</font><br/>";
			
		}
		if(empty($overtime)) {
			echo "<font color='red'>Overtime field is empty.</font><br/>";
			
		}
		if(empty($halftime)) {
			echo "<font color='red'>Halftime field is empty.</font><br/>";
			
		}
		if(empty($expense))  {
			echo "<font color='red'> Expense Field is empty.</font><br>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else 
	{ 
		// if all the fields are filled (not empty) 
			
		//insert data to database
		
		$result = mysqli_query($mysqli, "INSERT INTO salary (emp_id,dept_id,sal_amt,hra,da,ta,pres_days,leave_days,holidays,overtime,halftime,expense,gr_sal) VALUES('$emp_id','$dept_id','$sal_amt','$hra','$da','$ta', '$pres_days', '$leave_days', '$holidays', '$overtime', '$halftime', '$expense', '$gr_sal')");
		
		//display success message
		
		echo "<font color ='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
	
?>
</body>
</html>