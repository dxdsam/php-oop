<?php 
	
	$subject = "Kucing, Kambing, Rusa";
	$matches = [];
	
	$result = preg_match_all("/cing|ing|sa/i", $subject, $matches);
	var_dump($result);
	var_dump($matches);


