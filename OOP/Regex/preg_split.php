<?php 
	
	$subject = "Halo-dunia, selamat datang di rumah kami";
	$result = preg_split("/[\s, -]/", $subject);
	var_dump($result);