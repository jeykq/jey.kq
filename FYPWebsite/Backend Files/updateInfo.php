<?php
if (isset($_POST['submit'])){
    $host='hrportaldbs.cqtdtuqmqdyz.us-east-1.rds.amazonaws.com';
    $username='nhjbosses';
    $password='4lOrO^$pWNXj';
    $db='employeerecords';
    $email=$_POST['email'];
    $phoneNumber=$_POST['phoneNumber'];
    $employeeid = $_SESSION['employeeid'];
    
    $conn = new mysqli($host, $username, $password, $db);
    
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    if ($email != NULL && $phoneNumber != NULL){
        $sql= "UPDATE employeerecords.employeesensitiveinfo SET email = '$email', phoneNumber = $phoneNumber WHERE employee_id = $employeeid";
        $result = mysqli_query($conn,$sql);
        header("Location: https://18.212.3.55/ProfileInformation.php");
        
    } elseif ($email == NULL && $phoneNumber != NULL) {
        $sql= "UPDATE employeerecords.employeesensitiveinfo SET phoneNumber = $phoneNumber WHERE employee_id = $employeeid";
        $result = mysqli_query($conn,$sql);
        header("Location: https://18.212.3.55/ProfileInformation.php");
        
    } elseif ($email != NULL && $phoneNumber == NULL) {
        $sql= "UPDATE employeerecords.employeesensitiveinfo SET email = '$email' WHERE employee_id = $employeeid";
        $result = mysqli_query($conn,$sql);
        header("Location: https://18.212.3.55/ProfileInformation.php");
        
    } else {
        header("Location: https://18.212.3.55/ProfileInformation.php");
    }
}

