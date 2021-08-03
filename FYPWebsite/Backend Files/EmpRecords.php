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

$sql= "SELECT department_id FROM employeeinfo WHERE user_id='$userid'";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
$departmentid = $check[0];

$sql1= "SELECT employee_id, employee_name FROM employeeinfo WHERE department_id='$departmentid'";
$result1 = mysqli_query($conn,$sql1);
$check1 = mysqli_fetch_array($result1);
$employeeid = $check1[0];
$employeename = $check1[1];
$result2 = mysqli_query($conn,$sql1);
$check2 = mysqli_fetch_array($result1);
$employeeid1 = $check2[0];
$employeename1 = $check2[1];
$result3 = mysqli_query($conn,$sql1);
$check3 = mysqli_fetch_array($result1);
$employeeid2 = $check3[0];
$employeename2 = $check3[1];
$result4 = mysqli_query($conn,$sql1);
$check4 = mysqli_fetch_array($result1);
$employeeid3 = $check4[0];
$employeename3 = $check4[1];

$sql2= "SELECT email, phoneNumber FROM employeesensitiveinfo WHERE employee_id='$employeeid1'";
$result5 = mysqli_query($conn, $sql2);
$check5 = mysqli_fetch_array($result5);
$email = $check5[0];
$phoneNumber = $check5[1];

$sql3= "SELECT email, phoneNumber FROM employeesensitiveinfo WHERE employee_id='$employeeid2'";
$result6 = mysqli_query($conn, $sql3);
$check6 = mysqli_fetch_array($result6);
$email1 = $check6[0];
$phoneNumber1 = $check6[1];

$sql4= "SELECT email, phoneNumber FROM employeesensitiveinfo WHERE employee_id='$employeeid3'";
$result7 = mysqli_query($conn, $sql4);
$check7 = mysqli_fetch_array($result7);
$email2 = $check7[0];
$phoneNumber2 = $check7[1];

