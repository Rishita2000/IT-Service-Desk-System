<?php 

  
  session_start();
  include("dbConnection/dbConnection.php");
  include("common/functions.php");

  $user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Landing Page</title>
        <link rel ="stylesheet" href="../common/common_styles.css">
        <link rel ="stylesheet" href="app.component.css">
        <link rel ="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <!--Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
        
        <body>
        <?php
        require('dbConnection/dbConnection.php');
        if(isset($_POST['firstname'],$_POST['lastname'],$_POST['department'],$_POST['email'],$_POST['computerid'],$_POST['problemDescription'])){

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $department = $_POST['department'];
            $computerid = $_POST['computerid'];
            $problemDescription = $_POST['problemDescription'];


            $insertQuery = mysqli_query($con,"insert into servicetickets(firstname,lastname,email,department,computerid,problemDescription) values ('$firstname','$lastname','$email','$department','$computerid','$problemDescription')");
                
            echo '<script>alert("Ticket Submitted Succesfully");</script>';

        }

        function input_data($data) {  
          $data = trim($data);  
          $data = stripslashes($data);  
          $data = htmlspecialchars($data);  
          return $data;  
        }  


        ?>

        <section class="commongrid">
            <header>
                <!--Navbar Container Started-->
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">GTRI</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">IT Department</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="itDepartment/tickets.php">All Tickets</a></li>
                          <li><a class="dropdown-item" href="itDepartment/escalations.php">Escalations</a></li>
                          <li><a class="dropdown-item" href="itDepartment/Sla.php">Missed SLA</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Management</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="management/lookup.php">Lookup Users/ Departments/ Roles</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="data/reports.php">Reports</a></li>
                          <li><a class="dropdown-item" href="data/forms.php">Process Forms</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Software / Licensing</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="software_licensing/Security.php">Security</a></li>
                          <li><a class="dropdown-item" href="software_licensing/Licenses.php">Licenses</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="navbar-nav  ms-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">User</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="user/logout.php">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                </nav>
          <!--Navbar Container Ended-->
          </header>
          <main>
          <div class="mt-4 p-5 rounded mx-auto">
            <h1 style="text-align:center; color:white">GTRI IT Help Desk</h1> 
            <h3 style="text-align:center; color:white">Choose your service options</h3> 
          </div>
          </main>
       
        </section>
  </body>
</section>
</html>