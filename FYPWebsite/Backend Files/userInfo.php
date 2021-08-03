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

$sql= "SELECT employee_id FROM employeerecords.employeeinfo WHERE user_id='$userid'";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
$employeeid = $check[0];
$_SESSION['employeeid'] = $employeeid;

$sql1= "SELECT employee_name, employee_role FROM employeerecords.employeeinfo WHERE employee_id='$employeeid'";
$result1 = mysqli_query($conn,$sql1);
$check1 = mysqli_fetch_array($result1);
$employeename = $check1[0];
$employeerole = $check1[1];

$sql2= "SELECT email, phoneNumber FROM employeerecords.employeesensitiveinfo WHERE employee_id='$employeeid'";
$result2 = mysqli_query($conn, $sql2);
$check2 = mysqli_fetch_array($result2);
$email = $check2[0];
$phoneNumber = $check2[1];
