<?php
 session_start();
require('../dbConnection/dbConnection.php');

if(isset($_POST['name'],$_POST['email'],$_POST['password'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $department = $_POST['department'];
    $role = $_POST['role'];


    $findDuplicateQuery = mysqli_query($con,"select * from user where email='$email'");

    if(mysqli_num_rows($findDuplicateQuery)==0){
        $insertQuery = mysqli_query($con,"insert into user(name,email,password,role,department) values ('$name','$email','$password','$role','$department')");
        echo "<script type='text/javascript'>alert('User Registered Successfully !!!!!!!!');location='login.php';</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('User Not Registered Successfully !!!!!!!!');location='newuser.php';</script>";
    }

}


?>