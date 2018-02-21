<?php
    function createUser($username,$password,$email,$userlvl,$fname){
        include('connect.php');
        if(empty($username)||empty($password)||empty($email)||empty($fname)){
            $message = "Fill out all fields!";
            return $message;
        }
        $userString = "INSERT INTO tbl_users VALUES (NULL,'{$username}','{$password}','{$email}',NULL,NULL,'{$userlvl}','{$fname}')";
        // echo $userString;
        $userQuery = mysqli_query($link,$userString);
        if($userQuery){
            redirect_to('admin_index.php');
        }else{
            $message = "There was a problem setting up this user.";
            return $message;
        }
        

        mysqli_close($link);
    }

?>