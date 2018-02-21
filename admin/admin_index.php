<?php
require_once('phpscripts/config.php');
confirm_logged_in();
require_once('phpscripts/connect.php');

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
    <title>Admin Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <header id="mainHeader" class="container-fluid flexIn green">
        <div><h6 class="centerText">admin controls</h6></div>
        <h2>Cole's CMS</h2>
        <div class="flexInDown">
           <h6 class="centerText"><?php echo "{$_SESSION['users_name']}"?></h6> 
           <a href="phpscripts/caller.php?caller_id=logout">Logout</a>
        </div>
    </header>
    <div class="container">
        <div id="cmsContainer" class="beige flexInDown">
        <?php
            if($lastDateTime==""){$lastDateTime="Never!";}
            echo "<p>Last login was: ".$lastDateTime."</p>";
            // echo date('G');
            echo "<p>".$dayMessage."{$_SESSION['users_name']}"."</p>";
        ?>
        <a type="button" class="btn btn-primary m-1" class="but" href="admin_users.php">Create and Edit Users</a>
        </div>
    </div>
</body>
</html>