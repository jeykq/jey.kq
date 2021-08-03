<?php
if(isset($_POST['submit'])){
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
    
    if (!empty($_POST['date'])){
        $date = $_POST['date'];
        for ($i = 0; $i < count($date); $i++){
            $sql = "SELECT num_of_leave FROM employeeinfo WHERE user_id = $userid";
            $result = mysqli_query($conn,$sql);
            $check = mysqli_fetch_array($result);
            $days = $check[0];
            
            $day = $days - 1;
            $sql1 = "UPDATE employeeinfo SET num_of_leave = $day WHERE user_id = $userid";
            $result = mysqli_query($conn,$sql1);
            
            $value = implode(' | ', $date);
            $sql2= "UPDATE employeeinfo SET daysOff = '$value' WHERE user_id = $userid";
            $result = mysqli_query($conn,$sql2);
        }

        $sql1 = "SELECT user.user_type FROM credentials.user user INNER JOIN employeerecords.employeesensitiveinfo employeesensitiveinfo ON user.employee_id = employeesensitiveinfo.employee_id WHERE user_id = $userid";
        $result1 = mysqli_query($conn, $sql1);
        $check = mysqli_fetch_array($result1);
        $usertype = $check[0];
        
        if($usertype === 'regular'){
            header("Location: https://18.212.3.55/Schedule.php");
            
        } elseif ($usertype === 'admin') {
            header("Location: https://18.212.3.55/AdminSchedule.php");
        }
    }
}
?>
