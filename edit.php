<? php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pms');
 
/* Attempt to connect to MySQL database */
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if(isset($_POST['update']))
{	

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
	$gr_sal     = mysqli_real_escape_string($mysqli, $_POST['sal_amt'+'hra'+'da'+'ta'+'expense']);
		
		
	// checking empty fields
	if(empty($dept_id) || empty($sal_amt) || empty($hra) || empty($da) || empty($ta) || empty($pres_days) || empty($leave_days) || empty($holidays) || empty($overtime) || empty($halftime) || empty($expense)) 
	{
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
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
		else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE salary SET pres_days='$pres_days',leave_days='$leave_days',holidays='$holidays',overtime='$overtime',halftime='$halftime',date_time='$date_time',gr_sal='$gr_sal'	WHERE emp_id=$emp_id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$emp_id = $_GET['emp_id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM salary WHERE emp_id=$emp_id");

while($res = mysqli_fetch_array($result))
{	
	$emp_id     = $res['emp_id'];
	$dept_id    = $res['dept_id'];
	$sal_amt    = $res['sal_amt'];
	$hra        = $res['hra'];
	$da         = $res['da'];
	$ta         = $res['ta'];
	$pres_days  = $res['pres_days'];
	$leave_days = $res['leave_days'];
	$holidays   = $res['holidays'];
	$overtime   = $res['overtime'];
	$halftime   = $res['halftime'];
	$expense    = $res['expense'];
    $gr_sal    = $res['gr_sal'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head> 0

0<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
		    <tr> 
				<td>Emp_ID</td>
				<td><input type="text" name="emp_id" value="<?php echo $emp_id;?>"></td>
			</tr>
			<tr> 
				<td>Dept_ID</td>
				<td><input type="text" name="dept_id" value="<?php echo $dept_id;?>"></td>
			</tr>
			<tr> 
				<td>Salary Amount</td>
				<td><input type="text" name="sal_amt" value="<?php echo $sal_amt;?>"></td>
			</tr>
			<tr> 
				<td>HRA</td>
				<td><input type="text" name="hra" value="<?php echo $hra;?>"></td>
			</tr>
			<tr> 
				<td>DA</td>
				<td><input type="text" name="da" value="<?php echo $da;?>"></td>
			</tr>
			<tr> 
				<td>TA</td>
				<td><input type="text" name="ta" value="<?php echo $ta;?>"></td>
			</tr>
			
			<tr> 
				<td>Present Days</td>
				<td><input type="text" name="pres_days" value="<?php echo $pres_days;?>"></td>
			</tr>
			<tr> 
				<td>Leave Days</td>
				<td><input type="text" name="leave_days" value="<?php echo $leave_days;?>"></td>
			</tr>
			
			<tr> 
				<td>Holidays</td>
				<td><input type="text" name="holidays" value="<?php echo $holidays;?>"></td>
			</tr>
			
			<tr> 
				<td>Overtime</td>
				<td><input type="text" name="overtime" value="<?php echo $overtime;?>"></td>
			</tr>
			
			<tr> 
				<td>Halftime</td>
                <td><input type="text" name="halftime" value="<?php echo $halftime;?>"></td>			
			</tr>
				
			<tr> 
				<td>Expense</td>
				<td><input type="text" name="expense" value="<?php echo $expense;?>"></td>
			</tr>
			
			<tr>
				<td>Gross Salary</td>
				<td><input type="text" name="gr_sal" value="<?php echo $gr_sal;?>"></td>
			</tr>
			
				<td><input type="hidden" name="emp_id" value=<?php echo $_GET['emp_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
