<?php
include "Backend Files/variables.php";

$host='hrportaldbs.cqtdtuqmqdyz.us-east-1.rds.amazonaws.com';
$username='nhjbosses';
$password='4lOrO^$pWNXj';
$db='employeerecords';
$userid = $_SESSION['userid'];

$conn = new mysqli($host, $username, $password, $db);
        
if ($conn -> connect_errno) {   
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$sql= "SELECT num_of_leave FROM employeeinfo WHERE user_id='$userid'";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
$numofleave = $check[0];

