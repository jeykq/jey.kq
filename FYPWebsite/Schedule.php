<?php include 'Backend Files/ClearSession.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NHJ's Employee website</title>
        <link rel='stylesheet' type='text/css' href='CSS Files/ScheduleStyle.css'>
        <link rel='stylesheet' type='text/css' href='CSS Files/SidebarStyle.css'>
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
        <div class='calendar'>
            <div class='month-week'>
                <h1>August</h1>
                <hr>
                <div class='weeks'>
                    <span>Sun</span>
                    <span>Mon</span>
                    <span>Tue</span>
                    <span>Wed</span>
                    <span>Thu</span>
                    <span>Fri</span>
                    <span>Sat</span>
                </div>
                <div class='days'>
                    <span name="1">1</span>
                    <span name="2">2</span>
                    <span name="3">3</span>
                    <span name="4">4</span>
                    <span name="5">5</span>
                    <span name="6">6</span>
                    <span name="7">7</span>
                </div>
                <div class='days'>
                    <span name="8">8</span>
                    <span name="9">9</span>
                    <span name="10">10</span>
                    <span name="11">11</span>
                    <span name="12">12</span>
                    <span name="13">13</span>
                    <span name="14">14</span>
                </div>
                <div class='days'>
                    <span name="15">15</span>
                    <span name="16">16</span>
                    <span name="17">17</span>
                    <span name="18">18</span>
                    <span name="19">19</span>
                    <span name="20">20</span>
                    <span name="21">21</span>
                </div>
                <div class='days'>
                    <span name="22">22</span>
                    <span name="23">23</span>
                    <span name="24">24</span>
                    <span name="25">25</span>
                    <span name="26">26</span>
                    <span name="27">27</span>
                    <span name="28">28</span>
                </div>
                <div class='days'>
                    <span name="29">29</span>
                    <span name="30">30</span>
                    <span name="31">31</span>
                    <span class='other-month'>1</span>
                    <span class='other-month'>2</span>
                    <span class='other-month'>3</span>
                    <span class='other-month'>4</span>
                </div>
                <div class='btn'>
                    <a href='ApplyLeave.php'><input type="submit" name="submit" class="btn" value="APPLY"></a>
                </div>
            </div>
        </div>
    </body>    
</html>
