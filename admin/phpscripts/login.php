<?php

	function checkSuspension($ifNeedsChecking,$creationDate,$id){
		if($ifNeedsChecking==TRUE){
			if($creationDate+259200<date('U')){
				$result = FALSE;
			}else{
				$result = TRUE;
				$suspensionCheck= "UPDATE tbl_users SET users_suspensionCheck = FALSE WHERE users_id={$id} ";
				$suspensionQuery = myslqi_query($link,$suspensionCheck);
				//echo $suspensionCheck;
			}
		}else{
			$result = TRUE;
		}
		//echo $result;
		return $result;
	}

	function Login($username, $password, $ip) {
		require_once('connect.php');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginstring = "SELECT * FROM tbl_users WHERE users_name = '{$username}'";
		$user_set = mysqli_query($link, $loginstring);

		

		$found_user  = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
		$id = $found_user['users_id'];
		$fname = $found_user['users_fname'];
		if(password_verify($password,$found_user['users_pass'])){

			$suspension = checkSuspension($found_user['users_suspensionCheck'],$found_user['users_accountCreationDate'],$id);

			if($suspension==TRUE){
				$_SESSION['users_id'] = $id;
				$_SESSION['users_name'] = $found_user['users_name'];
			}else{
				$message = "This account is suspended. This is likely as a result of creating an account then waiting too long to verify. Please contact support.";
				return $message;
			}
			
			
			if(mysqli_query($link, $loginstring)) {
				$updatestring = "UPDATE tbl_users SET users_ip = '$ip' WHERE users_id={$id}";
                $updatequery = mysqli_query($link, $updatestring);
                $_SESSION['loginAttempts']=$_SESSION['loginAttempts']+1;

			redirect_to("admin_index.php"); 
			}
		}else{
			$message = "username or password is incorrect.";
			return $message;
		}
		
		mysqli_close($link);
	}

?>