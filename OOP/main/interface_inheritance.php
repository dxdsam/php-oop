<?php 
	
	/*
		# Interface juga bisa implements class lain, dan bisa lebih dari 1
		# Untuk mengimplements class lain kita menggunakan keyword extends 
		# Perlu di ingat bahwa Interface hanya bisa mengimplements interface dan bukan class
	*/
	
	interface Car 
	{
		function run():void;
	}

	interface Jet
	{
		function terbang():void;
	}

	interface MiniCar extends Car,Jet
	{
		// function run():void; 
	}