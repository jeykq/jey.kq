<?php
session_start();

if (isset($_POST['submit'])) {
    $host='hrportaldbs.cqtdtuqmqdyz.us-east-1.rds.amazonaws.com';
    $username='nhjbosses';
    $password='4lOrO^$pWNXj';
    $db='credentials';
    $otp= $_POST['otp'];
    $userid = $_SESSION['userid'];

    $conn = new mysqli($host, $username, $password, $db);
    
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

        $sql= "SELECT * FROM credentials.otp WHERE otp = '$otp'";
        $result = mysqli_query($conn,$sql);
        $check = mysqli_fetch_array($result);
        $userid = $check[0];
        $Sotp = $check[1];
    
        $sql1= "SELECT user_type FROM user WHERE user_id = '$userid'";
        $result1 = mysqli_query($conn, $sql1);
        $check1 = mysqli_fetch_array($result1);
        $usertype = $check1[0];
        
        if($Sotp === $otp && $usertype === 'regular'){
            header("Location: https://18.212.3.55/Dashboard.php");
            $sessionloggedin = TRUE;
            $_SESSION['loggedIn'] = $sessionloggedin;
            
        } elseif ($Sotp === $otp && $usertype === 'admin') {
            header("Location: https://18.212.3.55/AdminDashboard.php");
            $adminloggedin = TRUE;
            $_SESSION['adminloggedIn'] = $adminloggedin;
            
        } else {
            $alert = '<div class="warning"><span>Login unsuccessful: Invalid or expired OTP - Please login again to get a new OTP</span></div>';
            echo $alert;
        }
}
?>