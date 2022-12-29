<?php 
	/*
		Dengan mengguakan final class berarti class tersebut sudah tidak dapat 
		Di wariskan pada class turunan

		Untuk menggukanan final class, kita dapat memberikan keyword sebelum class
		Contoh :

	*/ 

	final class SocialMedia
	{
		public string $name;
	}

	/*
		Jika ada class yang mengextends final class maka akan terjadi error
	*/ 
	class Twitter extends SocialMedia
	{

	}

	/*
		Saat class twiter di inisialisasi makan akan terjadi error
	*/ 
	// $twitter = new Twitter; 

