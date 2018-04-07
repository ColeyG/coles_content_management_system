<?php
	require_once('phpscripts/config.php');
    confirm_logged_in();

    $title = "Create Users";

    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        // $password = randPass(8);
        $password = "Pass";// FOR TESTING, ALL PASSWORDS ARE "RANDOMLY GENERATED" TO 'Pass'
        $email = trim($_POST['email']);
        $userlvl = $_POST['userlvl'];
        $fname = trim($_POST['firstname']);
        if(empty($userlvl)){
            $message = "Please select a user level.";
        }else{
            $result = createUser($username,$password,$email,$userlvl,$fname);
            $message = $result;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
    <?php include('includes/styles.php');?>
</head>
<body>
    <?php include('includes/header.php');?>
    <div class="container">
        <div id="cmsContainer" class="flexInDown">
        <div class="flexInDown blue mainButtonsCon">
                <?php if(!empty($message)){echo "<p class='danger'>".$message."</p>";}?>
                <form action="admin_users.php" method="post" class="flexInDown">
                <label>First Name:</label>
                <input  type="text" name="firstname" value="<?php if(!empty($message)){echo $fname;}?>">
                <label>Username:</label>
                <input  type="text" name="username" value="<?php if(!empty($message)){echo $username;}?>">
                <label>Email:</label>
                <input  type="text" name="email" value="<?php if(!empty($message)){echo $email;}?>">
                <label>User Level:</label>
                <select name="userlvl">
                    <option value="">Please Select a User Level</option>
                    <option value="2">Web Admin</option>
                    <option value="1">Web Master</option>
                </select>
                    <input class="btn btn-primary m-1" type="submit" name="submit" value="Create User">
                </form>
            </div>
        </div> 
    </div>
</body>
</html>