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
//including the database connection file
include("config.php");

//getting id of the data from url
$emp_id = $_GET['emp_id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM salary WHERE emp_id=$emp_id");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

