<?php include "Backend Files/userInfo.php"; ?>
<?php include 'Backend Files/AdminSessionChecker.php'; ?>
<?php include 'Backend Files/ClearSession.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NHJ's employee website</title>
        <link rel='stylesheet' type='text/css' href='CSS Files/DashboardStyle.css'>
        <link rel='stylesheet' type='text/css' href='CSS Files/ProfileInfo.css'>
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
                    <a href='AdminProfileInfo.php'>
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
        
        <div class='main-content'>
            <main>
                <div class='card mb-3 content'>
                    <h1 class='m-3 pt-3'>About</h1>
                    <img src="images/Profile.jpg" alt=""/>
                    <div class='card-body'>
                        <div class='row'>
                            <div class='col-md-3'>
                                <h5>Full Name</h5>
                            </div>
                            <div class='col-md-9 text-secondary'>
                               <?php echo $employeename ?>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <h5>Email</h5>
                            </div>
                            <div class='col-md-9 text-secondary'>
                               <?php echo $email ?>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <h5>Phone</h5>
                            </div>
                            <div class='col-md-9 text-secondary'>
                                <?php echo $phoneNumber ?>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <h5>Role</h5>
                            </div>
                            <div class='col-md-9 text-secondary'>
                               <?php echo $employeerole ?>
                            </div>
                        </div>
                    </div>
                    <div class='btn'>
                        <a href='AdminEditProf.php'><input type="submit" name="submit" class="btn" value="EDIT INFORMATION"></a>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
