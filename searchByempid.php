<?php
$conn=mysqli_connect("localhost","root","","pms");
if(mysqli_connect_error($conn))
	{
	echo"Connection Failed:".mysqli_connect_error();
	}

$sql="select * from salary where emp_id='$_POST[emp_id]'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_assoc($result))
		{
		echo"Emp ID    :".$row["emp_id"]. "<br>".
			"Salary Amount    :".$row["sal_amt"]. "<br>".
			"HRA   :".$row["hra"]. "<br>".
			"TA   :".$row["ta"]. "<br>".
			"DA    :".$row["da"]. "<br>".
			"Gross Salary  :".$row["gr_sal"]. "<br>".
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