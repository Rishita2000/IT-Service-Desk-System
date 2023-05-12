<?php 
  session_start();
  include("../dbConnection/dbConnection.php");
  include("../common/functions.php");

  $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <title>All Tickets</title>
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
                  <li><a class="dropdown-item" href="escalations.php">Escalations</a></li>
                  <li><a class="dropdown-item" href="Sla.php">SLA's</a></li>
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
                  <li><a class="dropdown-item" href="../data/reports.php">Reports</a></li>
                  <li><a class="dropdown-item" href="../data/forms.php">Process Forms</a></li>
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
        <div class="sla_tracking">
          <h1 align="center">All Tickets</h1>
        </div>
        <section class="Search">
            <form action="Sla.php" method=post> 
                <!--<input type="search" id="css-serial" name="valueToSearch" placeholder="Search...">
                <input type="submit" name="search" value="Search">-->
                <section class="card-body">
                  <section class="table-responsive">
                    <table id="example" class="table" >
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Created By</th>
                          <th scope="col">Ticket Priority</th>
                          <th scope="col">Computer Id</th>
                          <th scope="col">Department</th>
                          <th scope="col">Description</th>                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $query = "select * from servicetickets";
                          $search_result = filterTable($query);

                          function filterTable($query){
                            require('../dbConnection/dbConnection.php');
                            $getAllLicenses = mysqli_query($con,$query);
                            return $getAllLicenses;
                          }
                          while($row=mysqli_fetch_array($search_result))
                          {
                          ?>
                          <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['priority']; ?></td>
                            <td><?php echo $row['computerid']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['problemDescription']; ?></td>
                          </tr>
                        
                        <?php
                          }
                          ?>
                        
                      </tbody>
                    </table>
                    </section>
                </section>
              <form>
            </section>
        </div>
        
  </main>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#example').DataTable();
      });
  </script>
</body>
</html>