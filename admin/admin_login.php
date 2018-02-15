<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

    require_once('phpscripts/config.php');
    $message = "";

	$ip = $_SERVER['REMOTE_ADDR'];//server call for remote address
	//echo $ip;
	if(isset($_POST['submit'])) {
		$username = trim($_POST['username']); //trim checks whitespace front and back
		$password = trim($_POST['password']);
		if($username !== "" && $password !== "") { //if username and pass if filled out
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
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <header id="mainHeader" class="container-fluid flexIn green">
        <h2>Cole's CMS</h2>
    </header>
    <div class="container-flud flexIn">
        <div id="mainLogin" class="container beige flexInDown">
            <form action="admin_login.php" method="post">
            <p>Username:</p>
            <input type="text" name="username" value="" class="input-group">
            <br>
            <p>Password:</p>
            <input type="text" name="password" value="" class="input-group">
            <br>
            <input type="submit" name="submit" value="Login" class="btn btn-info m-1">
            </form>
            <?php echo "<p class='danger'>".$message."</p>"; ?>
        </div>
    </div>
</body>
</html>