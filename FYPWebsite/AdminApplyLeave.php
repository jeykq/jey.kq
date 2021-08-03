<?php include 'Backend Files/ProcessLeave.php'; ?>
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
                <form method='post'>
                <div class='days'>
                    <span><input type='checkbox' id='date' name='date[]' value='1'> 1</span>
                    <span><input type='checkbox' id='date' name='date[]' value='2'> 2</span>
                    <span><input type='checkbox' id='date' name='date[]' value='3'> 3</span>
                    <span><input type='checkbox' id='date' name='date[]' value='4'> 4</span>
                    <span><input type='checkbox' id='date' name='date[]' value='5'> 5</span>
                    <span><input type='checkbox' id='date' name='date[]' value='6'> 6</span>
                    <span><input type='checkbox' id='date' name='date[]' value='7'> 7</span>
                </div>
                <div class='days'>
                    <span><input type='checkbox' id='date' name='date[]' value='8'> 8</span>
                    <span><input type='checkbox' id='date' name='date[]' value='9'> 9</span>
                    <span><input type='checkbox' id='date' name='date[]' value='10'> 10</span>
                    <span><input type='checkbox' id='date' name='date[]' value='11'> 11</span>
                    <span><input type='checkbox' id='date' name='date[]' value='12'> 12</span>
                    <span><input type='checkbox' id='date' name='date[]' value='13'> 13</span>
                    <span><input type='checkbox' id='date' name='date[]' value='14'> 14</span>
                </div>
                <div class='days'>
                    <span><input type='checkbox' id='date' name='date[]' value='15'> 15</span>
                    <span><input type='checkbox' id='date' name='date[]' value='16'> 16</span>
                    <span><input type='checkbox' id='date' name='date[]' value='17'> 17</span>
                    <span><input type='checkbox' id='date' name='date[]' value='18'> 18</span>
                    <span><input type='checkbox' id='date' name='date[]' value='19'> 19</span>
                    <span><input type='checkbox' id='date' name='date[]' value='20'> 20</span>
                    <span><input type='checkbox' id='date' name='date[]' value='21'> 21</span>
                </div>
                <div class='days'>
                    <span><input type='checkbox' id='date' name='date[]' value='22'> 22</span>
                    <span><input type='checkbox' id='date' name='date[]' value='23'> 23</span>
                    <span><input type='checkbox' id='date' name='date[]' value='24'> 24</span>
                    <span><input type='checkbox' id='date' name='date[]' value='25'> 25</span>
                    <span><input type='checkbox' id='date' name='date[]' value='26'> 26</span>
                    <span><input type='checkbox' id='date' name='date[]' value='27'> 27</span>
                    <span><input type='checkbox' id='date' name='date[]' value='28'> 28</span>
                </div>
                <div class='days'>
                    <span><input type='checkbox' id='date' name='date[]' value='29'> 29</span>
                    <span><input type='checkbox' id='date' name='date[]' value='30'> 30</span>
                    <span><input type='checkbox' id='date' name='date[]' value='31'> 31</span>
                    <span class='other-month'>1</span>
                    <span class='other-month'>2</span>
                    <span class='other-month'>3</span>
                    <span class='other-month'>4</span>
                </div>
                <div class='btn'>
                    <a href='AdminSchedule.php'><input type="submit" name="submit" class="btn" value="APPLY"></a>
                </div>
                </form>
            </div>
        </div>
    </body>    
</html>
