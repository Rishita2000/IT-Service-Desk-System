<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>User Registration</title>
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
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="../app.component.html">GTRI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Log In</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="login.php">Existing USer</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        </nav>
  <!--Navbar Container Ended-->
    </header>
      <main>
          <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                  <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
          
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">User Registration</p>                          
          
                          <form class="mx-1 mx-md-4" method="post" action="forminsert.php">                        

                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="text" id="form3Example1c" class="form-control" placeholder="Your Name" name="name" required/>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="email" id="form3Example3c" class="form-control"  placeholder="Your Email" name="email" required/>
                              </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fa fa-level-up me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                              <select class="form-control" id="role" name="role" required>
                                <option value="">Please Select Role</option>
                                <option value="Student">Student</option>
                                <option value="Professor">Professor</option>
                                <option value="Head Of the Department">Head of the Department</option>
                                <option value="Vice Principal">Vice Principal</option>
                                <option value="Principal">Principal</option>
                              </select>
                              </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fa fa-level-up me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                              <select class="form-control" id="department" name="department" required>
                                <option value="">Please Select Department</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="Software Engineering">Software Engineering</option>
                              </select>
                              </div>
                            </div>
      
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="password" id="form3Example4c" class="form-control"  placeholder="Password"  name="password" required/>
                              </div>
                            </div>
          
                            <div class="form-check d-flex justify-content-center mb-5">
                              <label class="form-check-label" for="form2Example3">
                                If Already Registered Please <a href="login.php">Login</a>
                              </label>
                            </div>
          
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                              <button type="submit" class="btn btn-primary btn-lg">Register</button>
                            </div>
          
                          </form>
          
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">  
                          <img src="https://image.shutterstock.com/image-illustration/new-user-online-registration-sign-260nw-2174740031.jpg"
                            class="img-fluid" alt="Sample image">  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </section>
    </main>
    </section>
</body>
</html>