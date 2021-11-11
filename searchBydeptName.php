<?php
$conn=mysqli_connect("localhost","root","","pms");
if(mysqli_connect_error($conn))
	{
	echo"Connection Failed:".mysqli_connect_error();
	}

$sql="select * from department where dept_name='$_POST[dept_name]'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_assoc($result))
		{
		echo"Dept ID    :".$row["dept_id"]. "<br>".
			"Dept Name   :".$row["dept_name"]. "<br>".
			"Dept Location   :".$row["dept_loc"]. "<br>".
			//"Emp ID    :".$row["emp_id"]. "<br>".
			//"Emp Name   :".$row["emp_name"]."<br>".
			//"Emp DOB   :".$row["emp_dob"]."<br>".
			//"Emp City   :".$row["emp_city"]."<br>".
			//"Emp Contact   :".$row["contact"]."<br>".
			//"Email ID   :".$row["email_id"]."<br>".
			"<br>";
		}
	}
else
	{
	echo"No Records Found";
	}
mysqli_close($conn);
?>