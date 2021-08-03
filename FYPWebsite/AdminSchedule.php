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
        session_start();
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
                <div class='days'>
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>5</span>
                    <span>6</span>
                    <span>7</span>
                </div>
                <div class='days'>
                    <span>8</span>
                    <span>9</span>
                    <span>10</span>
                    <span>11</span>
                    <span>12</span>
                    <span>13</span>
                    <span>14</span>
                </div>
                <div class='days'>
                    <span>15</span>
                    <span>16</span>
                    <span>17</span>
                    <span>18</span>
                    <span>19</span>
                    <span>20</span>
                    <span>21</span>
                </div>
                <div class='days'>
                    <span>22</span>
                    <span>23</span>
                    <span>24</span>
                    <span>25</span>
                    <span>26</span>
                    <span>27</span>
                    <span>28</span>
                </div>
                <div class='days'>
                    <span>29</span>
                    <span>30</span>
                    <span>31</span>
                    <span class='other-month'>1</span>
                    <span class='other-month'>2</span>
                    <span class='other-month'>3</span>
                    <span class='other-month'>4</span>
                </div>
                <div class='btn'>
                    <a href='AdminApplyLeave.php'><input type="submit" name="submit" class="btn" value="APPLY"></a>
                </div>
            </div>
        </div>
    </body>    
</html>
