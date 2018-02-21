<?php
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
	function randPass($length){
		$alphabet = 'abcdefghijklmnopqrstuvwxyz1234567890';
		$passArr = array();
		$alphaLength = strlen($alphabet) - 1;
		for ($i = 0; $i < $length; $i++) {
			$n = rand(0, $alphaLength);
			$passArr[] = $alphabet[$n];
		}
		return implode($passArr);
	}
?>