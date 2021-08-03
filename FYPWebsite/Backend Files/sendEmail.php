<?php
if (isset($_POST['submit'])) {
    $host='queriesdb.cqtdtuqmqdyz.us-east-1.rds.amazonaws.com';
    $username='nhjbosses';
    $password='4lOrO^$pWNXj';
    $db='queries';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    $conn = new mysqli($host, $username, $password, $db);
    
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    $sql= "INSERT INTO messages(customer_name, customer_email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);
    
    if ($result === TRUE) {
        $alert = '<div class="success"><span>Message sent! Thank you for contacting us!</span></div>';
        echo $alert;
    } else {
        $alert = '<div class="warning"><span>Something went wrong! Try again!</span></div>';
        echo $alert;
    }
    
}
?>