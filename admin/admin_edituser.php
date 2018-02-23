<?php
	require_once('phpscripts/config.php');
    confirm_logged_in();
    $getUser = getSingle('tbl_users','users_id',$_SESSION['users_id']);
    $foundUser=mysqli_fetch_array($getUser,MYSQLI_ASSOC);
    echo $foundUser['users_fname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <header id="mainHeader" class="container-fluid flexIn green">
        <div><h6 class="centerText">editing account</h6></div>
        <h2>Cole's CMS</h2>
        <div class="flexInDown">
           <h6 class="centerText"><?php echo "{$_SESSION['users_name']}"?></h6> 
           <a href="phpscripts/caller.php?caller_id=logout">Logout</a>
        </div>
    </header>
    <div class="container">
        <div id="cmsContainer" class="beige flexInDown">
            <?php if(!empty($message)){echo "<p class='danger'>".$message."</p>";}?>
            <form action="admin_users.php" method="post" class="flexInDown">
            <label>First Name:</label>
            <input  type="text" name="firstname" value="<?php ?>">
            <label>Username:</label>
            <input  type="text" name="username" value="<?php ?>">
            <label>Email:</label>
            <input  type="text" name="email" value="<?php ?>">
            <label>Old Password:</label>
            <input  type="text" name="password" value="<?php ?>">
            <label>New Password:</label>
            <input  type="text" name="newPassword" value="<?php ?>">
                <input class="btn btn-primary m-1" type="submit" name="submit" value="Edit Account">
            </form>
        </div> 
    </div>
</body>
</html>