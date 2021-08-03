<?php
session_start();
if (isset($_POST['submit'])) {
    $host='hrportaldbs.cqtdtuqmqdyz.us-east-1.rds.amazonaws.com';
    $username='nhjbosses';
    $password='4lOrO^$pWNXj';
    $db='credentials';
    $name=$_POST['username'];

    $conn = new mysqli($host, $username, $password, $db);
    
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    $sql= "SELECT username FROM user WHERE username = '$name'";
    $result = mysqli_query($conn, $sql);
    $check = mysqli_fetch_array($result);
    $uname = $check[0];
    $_SESSION['username'] = $uname;
   
    if($uname == $name){
        header("Location: https://18.212.3.55/ResetPassword.php");
 
    } else {
        $alert = '<div class="warning"><span>Username not found! Please try again!</span></div>';
        echo $alert;
    }
}
