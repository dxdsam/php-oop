<?php 

	$date = new DateTime();
	$date->setDate(2004, 9, 29);
	$date->setTime(10,10,10);

	// INI DIGUNAKAN UNTUK MEMAJUKAN TAHUN SEBANYAK 1 KE TAHUN BERIKUTNYA
	// $date->add(new DateInterval("P1Y"));

	// DAN INI DIGUNAKAN UNTUK MENGURANGI TAHUN KE 1 TAHUN SEBELUMYA
	$dateInterval = new DateInterval("P1Y");
	$dateInterval->invert = true;
	$date->add($dateInterval);
	var_dump($date);
