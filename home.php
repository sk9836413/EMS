<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Heading </title>
        <link href="Heading.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="heading1">
			<img src="administrator.png" height="150" width="150" />
			<h1> Welcome To EMS<h1>
		</div>
		
		<div id="heading2">
			<ul class="menu">
				
				<li> 
					<a class="cp lineh"> Employee <i class="arrow down"> </i> </a>
					<ul class="menu">
						<li> <a href="employee/addd.php" class="lineh"> Add New Employee </a> </li>
						<li>  <a href="employee/update.php" class="lineh">Update </a> </li>
						<li>  <a href="employee/deleteemp.php" class="lineh">Delete </a> </li>
						<li>  <a href="employee/view.php" class="view">View</a> </li>
						<li>  <a href="employee/search.php" class="view">Search</a> </li>
						
						
					</ul>
				</li>
				
				<li>
					 <a class="cp lineh"> Department<i class="arrow down"> </i> </a> 
					<ul class="menu">

							<li> <a href="DEPARTMENT/Addd.php" class="lineh"> Add New  </a> </li>
						<li>  <a href="DEPARTMENT/update.php" class="lineh">Delete </a> </li>
						<li>  <a href="department/view.php" class="view">View</a> </li>
						<li>  <a href="department/search.php" class="view">Search</a> </li>
								
			
						 
		
					</ul>	
						<li>
						
						
					<a class="cp lineh"> Salary<i class="arrow down"> </i> </a> 
					<ul class="menu">

							<li> <a href="salary/addd.php" class="lineh"> ENTER SALLARY DETAILS  </a> </li>
						<li>  <a href="salary/update.php" class="lineh"> Delete</a> </li>
						<li>  <a href="salary/view.php "class="lineh">View</a> </li>
						<li>  <a href="salary/search.php" class="view">Search</a> </li>
						</ul>		
					
						
		
				</li>
				<li> 
					 <a class="cp lineh"> Admin <i class="arrow down"> </i> </a>  
					<ul class="menu">
					
					
						<li>  <a href="logout.php" class="lineh"> Logout</a> </li>
			
					</ul>
				</li>
				
				<li class="hide"> <a href="HomeBody.html"> Log-out </a> </li>
			</ul><td><tr>
			</br></br></br></br></br></br></br></br></br></br>
			<div id="heading1">
			<h1 Style="text-align:center;">Employee Management System</h1>
			</DIV></td></tr>
			</br></br></br></br></br></br></br></br></br></br>
			<style>
			h1 {text-align: center;}
			p {text-align: center;}
			div {text-align: center;}
</style>
<h1>Employee management is a process that helps your workers perform at</p></br>

<h1> their best and achieve your business goals. It’s a holistic process </h1></br>
<h1>that covers almost everything related to human resources such as new</h1></br>
<h1> employee recruitment, payroll management, performance management and more.</h1></br>
		</div>
	</body>
</html>