<?php
require_once('phpscripts/config.php');
confirm_logged_in();
require_once('phpscripts/connect.php');

    $title = "Home";

    // date_default_timezone_set('America/New_York');
    // $id = $found_user['users_id'];
    $lastDateString = "SELECT * FROM tbl_users WHERE users_id={$_SESSION['users_id']}";
    $lastDate=mysqli_query($link, $lastDateString);
    // $found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
    $dateArray=mysqli_fetch_array($lastDate, MYSQLI_ASSOC);
    $lastDateTime=$dateArray['users_lastlog'];
    $date=date("d-m-y")." at ".date("h:i:sa");
    $updatestring = "UPDATE tbl_users SET users_lastlog = '$date' WHERE users_id={$_SESSION['users_id']}";
    $updatequery = mysqli_query($link, $updatestring);
    $dayHour=date('G');
    // if($dayHour>0){$dayMessage="Good morning ";}
    // if($dayHour>12){$dayMessage="Good afternoon ";}
    // if($dayHour>18){$dayMessage="Good evening ";}
    $_SESSION['loginAttempts']=0;

    if($dateArray['users_firstlog']==false){
        redirect_to("admin_edituser.php");
    }
    

    mysqli_close($link);
    // echo localtime()[2];
    /*
    Struggling to find out how to properly get a user's time... Just to find out that MAMP defaults its servers
    to UTC. This should work if the server was to go live and if not I can set the user's timezone above.
    Without JS finding this offset automatically is functionally impossible.
    */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings Dashboard</title>
    <?php include('includes/styles.php');?>
</head>
<body>
    <?php include('includes/header.php');?>
    <div class="container">
        <div id="cmsContainer" class="flexInDown">
        <?php
            if($lastDateTime==""){$lastDateTime="Never!";}
            //echo "<p>Last login was: ".$lastDateTime."</p>";
            // echo date('G');
            //echo "<p>".$dayMessage."User: "."{$_SESSION['users_name']}"."</p>";
        ?>
        <div class="flexInDown blue mainButtonsCon">
            <a class="btn btn-primary m-2" class="but" href="admin_users.php">Create Users</a>
            <a class="btn btn-primary m-2" class="but" href="admin_edituser.php">Edit Account</a>
            <a class="btn btn-primary m-2" class="but" href="admin_createapost.php">Create a Post</a>
        </div>
        </div>
    </div>
</body>
</html>