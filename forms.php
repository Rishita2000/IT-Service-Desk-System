<?php 
  session_start();
  include("../dbConnection/dbConnection.php");
  include("../common/functions.php");

  $user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Process Forms</title>
        <link rel ="stylesheet" href="../common/common_styles.css">
        <link rel ="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <!--Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
        
        <body>
        <?php
        require('../dbConnection/dbConnection.php');
        if(isset($_POST['firstname'],$_POST['lastname'],$_POST['department'],$_POST['email'],$_POST['computerid'],$_POST['problemDescription'])){

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $department = $_POST['department'];
            $computerid = $_POST['computerid'];
            $priority = $_POST['priority'];
            $problemDescription = $_POST['problemDescription'];

            $max_id_query = "SELECT MAX(id) FROM servicetickets";       

            $getmaxIdQueryResult = mysqli_query($con,$max_id_query);
            $row = mysqli_fetch_array($getmaxIdQueryResult);
            $highest_id = 'CID' . ($row[0]+1) . '';
            $insertQuery = mysqli_query($con,"insert into servicetickets(firstname,lastname,email,department,computerid,priority,problemDescription) 
            values ('$firstname','$lastname','$email','$department','$highest_id','$priority','$problemDescription')");
            
            if($insertQuery){
              $_SESSION['status'] = "Ticket Created Successfully !!!!!!!!";
            }
            else{
              $_SESSION['errStatus'] = "Error While Creating the Ticket !!!!!!!!";
            }

        }
  


        ?>

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
                          <li><a class="dropdown-item" href="reports.php">Reports</a></li>
                          <!-- <li><a class="dropdown-item" href="forms.php">Process Forms</a></li> -->
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
            <form class="container col-md-12 offset-md-4" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
               <h1>IT Service Ticket</h1>
               <p>Please provide the details of the problem</p>
               
               <section class="col-md-4">
                  <label for="name" class="label label-default"><b>Name</b></label>
                  <section class="input-group ">
                      <!-- declaration for first field -->
                      <input type="text" class="form-control input-sm" placeholder="First Name" name="firstname" required/><br>
                      <!-- reducong the gap between them to zero -->
                      <span class="input-group-btn" style="width:25px;"></span>
                      <!-- declaration for second field -->
                      <input type="text" class="form-control input-sm" placeholder="Last Name" name="lastname" required/>
                      
                  </section>
                  <hr>
                </section>
                
                <section id="emailBox" class="col-md-4">
                    <label for="email" id="emailLabel" class="label label-default"><b>Email Address</b></label>
                    <input type="email" id="emailAddress" class="form-control"  placeholder="ex: m.uname@example.com" name="email" required>
                    
                    <hr>
                </section>
                
                <section id="departmentBox" class="col-md-4">
                    <label for="department" id="departmentId" class="label label-default"><b>Department</b></label>
                    <input type="text" class="form-control" name="department" required>
                    
                    <hr>
                </section>
                <section id="computerIdBox" class="col-md-4">
                    <label for="computerId" id="computerId" class="label label-default"><b>Computer ID</b></label>
                    <input type="text" class="form-control" name="computerid" placeholder="Value will be Autopopulated" readonly>                    
                    <hr>
                </section>
                <section class="form-group col-md-4"">
                    <label for="priority" class="label label-default"><b>Priority</b></label>
                    <select class="form-control" id="priority" name="priority">
                      <option value="High">High</option>
                      <option value="Medium">Medium</option>
                      <option value="Low">Low</option>
                    </select>
                    <hr>
                </section>
                <section class="col-md-4">
                    <label for="problem" id="problem" class="label label-default"><b>Describe the Problem</b></label>
                    <textarea name="problemDescription" id="problemDescription" cols="50" rows="5" class="form-control" required></textarea>
                    
                </section>
                <br>
                <section>
                    <a href="#">
                      <input type="submit" class="btn btn-success" id="submit"
                              value = "Submit" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        
                    </a>
              </section>                
            </form>              
        </main>
        <!-- <footer>
            <div>
              <p>Copyright @ GTRI IT : 2022</p>
            </div>
        </footer>  -->
        </section>
        <script>
          if ( window.history.replaceState ) {
              window.history.replaceState( null, null, window.location.href );
          }
      </script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <?php 
        if(isset($_SESSION['status']) && isset($_SESSION['status']) != '')
        {
      ?>    
                      
        <script>
          swal({
            title: "<?php echo $_SESSION['status']; ?>",
            icon: "success",
            button: "Close"
          });
        </script>

                        
      <?php  
      unset($_SESSION['status']);
      }
      ?>
  </body>
</section>
</html>