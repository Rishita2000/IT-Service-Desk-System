<?php


require('../dbConnection/dbConnection.php');

if(isset($_POST['email'],$_POST['password'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $findUserEmailQueryResult = mysqli_query($con,"select * from user where email='$email' limit 1");

    if($findUserEmailQueryResult){
        if($findUserEmailQueryResult && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($findUserEmailQueryResult);
            if ($user_data['password'] === $password){
                $_SESSION['user_id'] = $user_data['email'];
                header("Location: ../data/forms.php");
                die;
            }
        }
        else{
            echo "Please Enter Correct Credentails";
            header("Location: login.php");
            die;
        }       

    }

}


?>