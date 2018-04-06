<?php
	require_once('phpscripts/config.php');
    confirm_logged_in();
    $getUser = getSingle('tbl_users','users_id',$_SESSION['users_id']);
    $foundUser=mysqli_fetch_array($getUser,MYSQLI_ASSOC);
    if(isset($_POST['submit'])){
        
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $fname = trim($_POST['firstname']);
        $newPass = trim($_POST['newPassword']);
        $id = $_SESSION['users_id'];
        
        if($username===""||$password===""||$email===""||$fname===""){
            $message = "A field was empty";
            // echo $username." / ".$password." / ".$email." / ".$fname;
        }else{
            if(password_verify($password,$foundUser['users_pass'])){
                if(!$newPass==""){$editPassCheck = true;}else{$editPassCheck = false;}
                editUser($id,$editPassCheck,$username,$email,$fname,$newPass);
            }else{
                $message = "Login was not successful";
            }
        }

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/bootswatch.css" rel="stylesheet">
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
        <div id="cmsContainer" class="flexInDown">
            <div class="flexInDown blue mainButtonsCon">
                <?php if(!empty($message)){echo "<p class='danger'>".$message."</p>";}?>
                <form action="admin_edituser.php" method="post" class="flexInDown">
                <label>First Name:</label>
                <input  type="text" name="firstname" value="<?php echo $foundUser['users_fname']?>">
                <label>Username:</label>
                <input  type="text" name="username" value="<?php echo $foundUser['users_name']?>">
                <label>Email:</label>
                <input  type="text" name="email" value="<?php echo $foundUser['users_email']?>">
                <label>Old Password (Required):</label>
                <input  type="text" name="password" value="<?php ?>">
                <label>New Password (if desired):</label>
                <input  type="text" name="newPassword" value="<?php ?>">
                    <input class="btn btn-primary m-1" type="submit" name="submit" value="Edit Account">
                </form>
            </div>
        </div> 
    </div>
</body>
</html>