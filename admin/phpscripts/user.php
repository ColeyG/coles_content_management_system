<?php
    function createUser($username,$password,$email,$userlvl,$fname){
        include('connect.php');
        if(empty($username)||empty($password)||empty($email)||empty($fname)){
            $message = "Fill out all fields!";
            return $message;
        }
        $enPass = password_hash($password, PASSWORD_DEFAULT);
        $userString = "INSERT INTO tbl_users VALUES (NULL,'{$username}','$enPass','{$email}',NULL,NULL,'{$userlvl}','{$fname}')";
        //echo $userString;
        $userQuery = mysqli_query($link,$userString);
        if($userQuery){
            /* THE FOLLOWING CODE IS THE MAILER. This will not work on a non-live site, but does succesfully mail. Tested it! :) (it calls the mailer.php function in functions.php.)*/
            mailer($email,'Account Verification',"Account Verification for Cole's CMS.com, Here are your credentials:<br> Username: ".$username." Password: ".$password." Register at: colescms.com");
            redirect_to('admin_index.php');
        }else{
            $message = "There was a problem setting up this user.";
            return $message;
        }
        

        mysqli_close($link);
    }

    function editUser($id,$editPassCheck,$username,$email,$fname,$newPass){
        include('connect.php');
        $enPass = password_hash($newPass);
        if ($editPassCheck==true){
        $userString = "UPDATE tbl_users SET users_fname='{$fname}', users_name='{$username}', users_email='{$email}', users_pass='$enPass' WHERE users_id={$id}";
        }else{
            $userString = "UPDATE tbl_users SET users_fname='{$fname}', users_name='{$username}', users_email='{$email}' WHERE users_id={$id}";
        }
        $userUpdateQuery = mysqli_query($link,$userString);
        if($userUpdateQuery){
            redirect_to('admin_index.php');
        }else{
            $message = "There was a problem editing this account.";
            return $message;
        }

        mysqli_close($link);
    }
    
?>