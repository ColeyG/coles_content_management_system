<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
    
    $title = "Login";

    require_once('phpscripts/config.php');
    $message = "";

    if(!isset($_SESSION['loginAttempts'])){$_SESSION['loginAttempts']=0;}

	$ip = $_SERVER['REMOTE_ADDR'];
	if(isset($_POST['submit'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the requred fields";
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
    <header id="mainHeader" class="container-fluid flexIn green">
        <h2>Cole's CMS</h2>
    </header>
    <div class="container-flud flexIn">
        <div id="mainLogin" class="container flexInDown">
        <div class="flexInDown blue mainButtonsCon">
                <?php
                if($_SESSION['loginAttempts']>=5){
                    echo "<p class='danger'>TOO MANY FAILED ATTEMPTS AT LOGIN. PLEASE WAIT</p>";
                }else{echo '
                <form action="admin_login.php" method="post">
                <p>Username:</p>
                <input type="text" name="username" value="" class="input-group">
                <br>
                <p>Password:</p>
                <input type="text" name="password" value="" class="input-group">
                <br>
                <input type="submit" name="submit" value="Login" class="btn btn-info m-1">
                </form>';}
                echo "<p class='danger'>".$message."</p>"; ?>
            </div>
        </div>
    </div>
</body>
</html>