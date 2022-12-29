<?php 

	$now = new DateTime();
	var_dump($now);

	$now->setTimeZone(new DateTimeZone("America/Toronto"));
	var_dump($now);