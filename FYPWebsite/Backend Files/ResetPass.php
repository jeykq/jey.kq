<?php
if (isset($_POST['submit'])){

    $host='hrportaldbs.cqtdtuqmqdyz.us-east-1.rds.amazonaws.com';
    $username='nhjbosses';
    $password='4lOrO^$pWNXj';
    $db='credentials';
    $pass=$_POST['password'];
    $pass1=$_POST['password1'];
    $uname=$_SESSION['username'];
    
    $conn = new mysqli($host, $username, $password, $db);
    
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    if ($pass === $pass1){
        $sql= "UPDATE user SET password = '$pass1' WHERE username = '$uname'";
        $result = mysqli_query($conn, $sql);
        header("Location: https://18.212.3.55/LoginPage.php");
        
    } else {
        $alert = '<div class="warning"><span>Passwords does not match! Please retype!</span></div>';
        echo $alert;
    }
}


