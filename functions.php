<?php

function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from user where email = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;

        }
    }else{
         // redirect to login
        $prevUrl = previousPageUrl();
        $currentUrl = current_url();
        if((strpos($prevUrl, 'app.component.php') == true) || (strpos($currentUrl, 'app.component.php') == true) ){
            header("Location: user/login.php");
            die;
        }
        else{
            header("Location: ../user/login.php");
            die;
        }

       
        
    }

   
}


function previousPageUrl(){
    if(isset($_SERVER['HTTP_REFERER'])){
        return $_SERVER['HTTP_REFERER'];
    }
}

function current_url(){
    $url = $_SERVER['REQUEST_URI'];
    return $url;
}

?>