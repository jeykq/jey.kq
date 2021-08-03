<?php include 'Backend Files/getNumOfLeave.php'; ?>
<?php include 'Backend Files/bookedLeaveDays.php'; ?>
<?php include 'Backend Files/AdminSessionChecker.php'; ?>
<?php include 'Backend Files/ClearSession.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NHJ's Employee website</title>
        <link rel='stylesheet' type='text/css' href='CSS Files/AdminDashboardStyle.css'>
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
        
        <div class='main-content'>
            <main>
                <h2 class='dash-title'>Overview</h2>
                <div class='dash-cards'>
                    <div class='card-single' id='customer'>
                        <div class='card-body'>
                            <span class="fas fa-user-friends"></span>
                            <div>
                                <h5>Number of customers</h5>
                                <h4>250</h4>
                            </div>
                        </div>
                    </div>
                    <div class='card-single' id='application'>
                        <div class='card-body'>
                            <span class="fas fa-shield-alt"></span>
                            <div>
                                <h5>Applications secured</h5>
                                <h4>100</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <section class='recent'>
                    <div class='task-table'>
                        <div class='task-card'>
                            <h3>TASKS</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Finish assignments</td>
                                        <td>24/06/2021</td>
                                        <td>30/06/2021</td>
                                        <td>
                                            <span class='badge-success'>Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Update boss on team members and project</td>
                                        <td>01/07/2021</td>
                                        <td>04/07/2021</td>
                                        <td>
                                           <span class='badge-success'>Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Check on report for project</td>
                                        <td>06/08/2021</td>
                                        <td>06/08/2021</td>
                                        <td>
                                           <span class='badge-warning'>Incomplete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Plan a final meeting</td>
                                        <td>01/08/2021</td>
                                        <td>07/08/2021</td>
                                        <td>
                                           <span class='badge-warning'>Incomplete</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div>
                        <div class='summary'>
                            <div class='summary-card'>
                                <div class='summary-single'>
                                    <span class='fas fa-calendar-alt'></span>
                                    <div>
                                        <h5><?php echo $numofleave ?></h5>
                                        <small>Number of leave</small>
                                    </div>
                                </div>
                                <div class='summary-single'>
                                    <span class='fas fa-calendar-day'></span>
                                    <div>
                                        <h5><?php echo $dates ?></h5>
                                        <small>Dates on leave</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
                </div>
            </main>
        </div>
    </body>
</html>