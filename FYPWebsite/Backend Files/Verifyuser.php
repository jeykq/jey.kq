<?php
session_start();
require __DIR__ . '/twilio-php-main/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;

if (isset($_POST['submit'])) {
    $host='hrportaldbs.cqtdtuqmqdyz.us-east-1.rds.amazonaws.com';
    $username='nhjbosses';
    $password='4lOrO^$pWNXj';
    $db='credentials';
    $name=$_POST['username'];
    $pass=$_POST['password'];
    
    $conn = new mysqli($host, $username, $password, $db);
    
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    $sql= "SELECT * FROM user WHERE username = '$name' AND password = '$pass'";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_fetch_array($result);
    
    if(isset($check)){  
        $sql1 = "SELECT user.user_id, employeesensitiveinfo.phoneNumber, employeesensitiveinfo.employee_id FROM credentials.user user INNER JOIN employeerecords.employeesensitiveinfo employeesensitiveinfo ON user.employee_id = employeesensitiveinfo.employee_id WHERE username = '$name' AND password = '$pass'";
        $result = mysqli_query($conn, $sql1);
        $check1 = mysqli_fetch_array($result);
        $userid = $check1[0];
        $employeeid = $check1[2];
        $_SESSION['userid']=$userid;
        $_SESSION['employeeid']=$employeeid;
        
        if(isset($check1)){
            $otp = rand(100000, 999999);
            $account_sid = 'AC22e90cfbdb592a53c907acfc2fc1e426';
            $auth_token = 'b96db5cdeb5947468c57a95dc32869b9';
            $twilio_number = "+17692065783";
            $client = new Client($account_sid, $auth_token);
            
            $client-> messages -> create(
                    "'"."+65".$check1[1]."'",
                    [
                        'from' => $twilio_number,
                        'body' => 'Your OTP is: '.$otp.' | This OTP is valid for 3 minutes'
                    ]
            );
            
            $sql2 = "SELECT * FROM otp WHERE user_id = '$userid'";
            $result1 = mysqli_query($conn, $sql2);
            $check2 = mysqli_fetch_array($result1);
            
            if ($check2 === NULL){
                $sql3 = "INSERT INTO otp (user_id, otp, time) VALUES ('$userid','$otp',CURRENT_TIMESTAMP)";
                $result = mysqli_query($conn, $sql3);
                header("Location: https://18.212.3.55/OTP.php");
            } else {
                $sql4 = "UPDATE otp SET otp='$otp' WHERE user_id = '$userid'";
                $result = mysqli_query($conn, $sql4);
                header("Location: https://18.212.3.55/OTP.php");
            }
                       
        } else {
            $alert = '<div class="warning"><span>Something went wrong!</span></div>';
            echo $alert;
        }
       
        } else {
            $alert = '<div class="warning"><span>Login unsuccessful: Invalid username or password!</span></div>';
            echo $alert;
    }
}
?>
