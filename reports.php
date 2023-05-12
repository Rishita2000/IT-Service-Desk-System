<?php 
  session_start();
  include("../dbConnection/dbConnection.php");
  include("../common/functions.php");

  $user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reports</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <!-- <link rel="stylesheet" href="reports.css"> -->
        <link rel ="stylesheet" href="../common/common_styles.css">
        <link rel ="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <!--Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
        
    </head>
    <body>     
    <section class="commongrid">
    <header>
                <!--Navbar Container Started-->
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="../app.component.html">GTRI</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">IT Department</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../itDepartment/tickets.php">All Tickets</a></li>
                          <li><a class="dropdown-item" href="../itDepartment/escalations.php">Escalations</a></li>
                          <li><a class="dropdown-item" href="../itDepartment/Sla.php">Missed SLA</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Management</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../management/lookup.php">Lookup Users/ Departments/ Roles</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data</a>
                        <ul class="dropdown-menu">
                          <!-- <li><a class="dropdown-item" href="reports.html">Reports</a></li> -->
                          <li><a class="dropdown-item" href="forms.php">Process Forms</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Software / Licensing</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../software_licensing/Security.php">Security</a></li>
                          <li><a class="dropdown-item" href="../software_licensing/Licenses.php">Licenses</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">User</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../user/logout.php">Log Out</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                </nav>
          <!--Navbar Container Ended-->
          </header>
        <main>
            <h4>New tickets</h4>
            <span>
                <p><span id="numberBlue">1,814 </span><span id="decreaseStyle"> &#9660; -165</span> <span id="displayGrey"> previous 7 days</span></p>
                <p></p>
            </span>            
        
        <canvas id="myChart"></canvas>
        <hr>        
            <span style="float: left;padding-left: 40px;" id="bottomPageSpan">
                <p>Solved tickets</p>
                <h2 style="color:darkblue;">22</h2>
            </span>
            <span style="float: left;padding-left: 40px;" id="bottomPageSpan">
                <p>Closed tickets</p>
                <h2 style="color:darkblue;">1580</h2>
            </span>
            <span style="float: left; padding-left: 40px;" id="bottomPageSpan">
                <p>Avg. response time</p>
                <h2>10h 58mins</h2>
            </span>
            <span style="float: left;padding-left: 40px;" id="bottomPageSpan">
                <p>Rated great</p>
                <h2>&#128515; 100%</h2>
                <p style="color:darkgoldenrod;">&#9650; 50 p.p.</p>
            </span>
            </span><span style="float: left;padding-left: 40px;" id="bottomPageSpan">
                <p>Rated okay</p>
                <h2>&#128528; 0%</h2>
                <p style="color:darkblue;">&#9660; 50 p.p.</p>
            </span>
            <span style="float: left;padding-left: 40px;" id="bottomPageSpan">
                <p>Rated bad</p>
                <h2> &#128532; 0%</h2>
            </span>
          <main>
          </section>
        <script src="app.js"></script>
    </body>

</html>

