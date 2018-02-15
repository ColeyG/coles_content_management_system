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

    mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Hey</h1>
    <?php
        echo "Last login was: ".$lastDateTime;
    ?>
</body>
</html>