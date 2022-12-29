<?php 
	
	$bwords = "Bangsat kau, dasar anjing";
	$result = preg_replace("/bang|jing/i", "***", $bwords);
	var_dump($result);