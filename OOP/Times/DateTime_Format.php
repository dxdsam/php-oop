<?php 

	// Untuk memformat waktu kita dapat menggunakan fungsi format()
	$date = new DateTime();
	$date->setTimeZone(new DateTimeZone("Asia/Jakarta"));
	$present = $date->format("Y-m-d H:i:s");
	echo "Waktu saat ini adalah : $present".PHP_EOL;

	/*
		Selain format DateTime menjadi string, di PHP juga kita bisa melakukan hal sebaliknya,
		yaitu memparsing string menjadi DateTime sesuai dengan format yang kita mau
	*/

	$present = DateTime::createFromFormat("Y-m-d H:i:s", "2004-9-29 11:11:11", new DateTimeZone("Asia/Jakarta"));
	var_dump($present);



