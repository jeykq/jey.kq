<?php
include "Backend Files/variables.php";

$host='hrportaldbs.cqtdtuqmqdyz.us-east-1.rds.amazonaws.com';
$username='nhjbosses';
$password='4lOrO^$pWNXj';
$db='documents';
$userid = $_SESSION['userid'];
$employeeid = $_SESSION['employeeid'];

$conn = new mysqli($host, $username, $password, $db);
        
if ($conn -> connect_errno) {   
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$sql = "SELECT employeesensitiveinfo.employee_id FROM credentials.user user INNER JOIN employeerecords.employeesensitiveinfo employeesensitiveinfo ON user.employee_id = employeesensitiveinfo.employee_id WHERE user_id = $userid";
$result = mysqli_query($conn, $sql);
$check = mysqli_fetch_array($result);
$employeeid = $check[0];

$sql1 = "SELECT department_id FROM employeerecords.employeeinfo employeeinfo WHERE employee_id = $employeeid";
$result1 = mysqli_query($conn, $sql1);
$check1 = mysqli_fetch_array($result1);
$departmentid = $check1[0];

if(isset($_POST['submit'])) {   
    $file = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];

    $sql = "INSERT INTO documents(user_id, department_id, document_name, document_type, doc_url) VALUES('$userid', '$departmentid', '$file', '$file_type', 'https://docdatabasebucket.s3.amazonaws.com/')";
    mysqli_query($conn,$sql);
    
    if ($departmentid === '1001') {
        $sql = "INSERT INTO finance_docs(user_id, department_id, document_name, document_type, doc_url) VALUES('$userid', '$departmentid', '$file', '$file_type', 'https://docdatabasebucket.s3.amazonaws.com/finance')";
        mysqli_query($conn,$sql);
    } elseif ($departmentid === '1002') {
        $sql = "INSERT INTO hr_docs(user_id, department_id, document_name, document_type, doc_url) VALUES('$userid', '$departmentid', '$file', '$file_type', 'https://docdatabasebucket.s3.amazonaws.com/hr')";
        mysqli_query($conn,$sql);
    } elseif ($departmentid === '1003') {
        $sql = "INSERT INTO it_docs(user_id, department_id, document_name, document_type, doc_url) VALUES('$userid', '$departmentid', '$file', '$file_type', 'https://docdatabasebucket.s3.amazonaws.com/it')";
        mysqli_query($conn,$sql);
    } else {
        $sql = "INSERT INTO ops_docs(user_id, department_id, document_name, document_type, doc_url) VALUES('$userid', '$departmentid', '$file', '$file_type', 'https://docdatabasebucket.s3.amazonaws.com/ops')";
        mysqli_query($conn,$sql);
    }
        
} else {
    echo "Error. Please try again";
}
?>