<?php
require_once('phpscripts/config.php');
confirm_logged_in();
require_once('phpscripts/connect.php');

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
    if($dayHour>0){$dayMessage="Good morning ";}
    if($dayHour>12){$dayMessage="Good afternoon ";}
    if($dayHour>18){$dayMessage="Good evening ";}

    mysqli_close($link);

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
        <h2>Cole's CMS</h2>
    </header>
    <div class="container">
        <div id="cmsContainer" class="beige flexInDown">
        <?php
            echo "<p>Last login was: ".$lastDateTime."</p>";
            // echo date('G');
            echo "<p>".$dayMessage."{$_SESSION['users_name']}"."</p>";
        ?>
        </div>
    </div>
</body>
</html>