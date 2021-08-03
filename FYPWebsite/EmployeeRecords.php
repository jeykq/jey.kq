<?php include "Backend Files/EmpRecords.php"; ?>
<?php include 'Backend Files/AdminSessionChecker.php'; ?>
<?php include 'Backend Files/ClearSession.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NHJ's Employee website</title>
        <link rel='stylesheet' type='text/css' href='CSS Files/SidebarStyle.css'>
        <link rel='stylesheet' type='text/css' href='CSS Files/EmployeeRecordsStyle.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <div class='sidebar'>
            <div class='sidebar-header'>
                <h3 class='brand'>
                    <span class='fas fa-laptop'></span>
                    <span>NHJ INC.</span>
                </h3>
            </div>
            
            <div class='sidebar-menu'>
                <li>
                    <a href='AdminDashboard.php'>
                        <span class="fas fa-desktop"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href='AdminEditProf.php'>
                        <span class="fas fa-id-card"></span>
                        <span>Profile Information</span>
                    </a>
                </li>
                <li>
                    <a href='AdminUpload.php'>
                        <span class="fas fa-file-upload"></span>
                        <span>Upload work</span>
                    </a>
                </li>
                <li>
                    <a href='AdminSchedule.php'>
                        <span class="fas fa-calendar-alt"></span>
                        <span>Work schedule</span>
                    </a>
                </li>
                <li>
                    <a href='EmployeeRecords.php'>
                        <span class="fas fa-user-friends"></span>
                        <span>Employee Records</span>
                    </a>
                </li>
            </div>
            <form method="post">
            <div class='logout-btn'>
                <a href='MainPage.php'><input type="submit" name="logout" class="send-btn" value="LOGOUT"></a>
            </div>
            </form>
        </div>
        <table class="recordTable">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $employeeid1 ?></td>
                    <td><?php echo $employeename1 ?></td>
                    <td><?php echo $phoneNumber ?></td>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td><?php echo $employeeid2 ?></td>
                    <td><?php echo $employeename2 ?></td>
                    <td><?php echo $phoneNumber1 ?></td>
                    <td><?php echo $email1 ?></td>
                </tr>
                <tr>
                    <td><?php echo $employeeid3 ?></td>
                    <td><?php echo $employeename3 ?></td>
                    <td><?php echo $phoneNumber2 ?></td>
                    <td><?php echo $email2 ?></td>
                </tr>
                </tr>
            </tbody>
        </table>
    </body>    
</html>

