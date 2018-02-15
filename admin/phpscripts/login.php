<?php

	function Login($username, $password, $ip) {
		require_once('connect.php');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginstring = "SELECT * FROM tbl_users WHERE users_name = '{$username}' AND users_pass = '{$password}'";

		$user_set = mysqli_query($link, $loginstring);
			
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $found_user['users_id'];
			$_SESSION['users_id'] = $id;
			$_SESSION['users_name'] = $found_user['users_fname'];
			if(mysqli_query($link, $loginstring)) {
				$updatestring = "UPDATE tbl_users SET users_ip = '$ip' WHERE users_id={$id}";
				$updatequery = mysqli_query($link, $updatestring);
			

			redirect_to("admin_index.php");
		}else{
			$message = "username or password is incorrect.";
			return $message;
		}
			echo $id;


		mysqli_close($link);
	}

?>