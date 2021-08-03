<?php include 'Backend Files/ProcessDocument.php'; ?>
<?php include 'Backend Files/SessionChecker.php'; ?>
<?php include 'Backend Files/ClearSession.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NHJ's Employee website</title>
        <link rel='stylesheet' type='text/css' href='CSS Files/SidebarStyle.css'>
        <link rel='stylesheet' type='text/css' href='CSS Files/UploadStyle.css'>
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
                    <a href='Dashboard.php'>
                        <span class="fas fa-desktop"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href='ProfileInformation.php'>
                        <span class="fas fa-id-card"></span>
                        <span>Profile Information</span>
                    </a>
                </li>
                <li>
                    <a href='Upload.php'>
                        <span class="fas fa-file-upload"></span>
                        <span>Upload work</span>
                    </a>
                </li>
                <li>
                    <a href='Schedule.php'>
                        <span class="fas fa-calendar-alt"></span>
                        <span>Work schedule</span>
                    </a>
                </li>
            </div>
            <form method="post">
            <div class='logout-btn'>
                <a href='MainPage.php'><input type="submit" name="logout" class="send-btn" value="LOGOUT"></a>
            </div>
            </form>
        </div>
        <form enctype="multipart/form-data" method="post">
        <div class="wrapper">
            <div class="title">
                File upload
            </div>
            <div class="choose_file">
                <input type="file" id="file" name="file">
            </div>
            <div class='btn'>
                <a href='Upload.php'><input type="submit" name="submit" class="btn" value="UPLOAD FILE"></a>
            </div>
        </div>
        </form>
    </body>    
</html>
