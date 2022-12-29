<?php 

	trait Car
	{
		public int $roda;
		public bool $rem;
	}

	trait Motor 
	{
		use Car;
	}

	class Toyota
	{
		use Motor; 
	}

	$toyota = new Toyota;
	$toyota->roda = 4;
	$toyota->rem = true;
	var_dump($toyota);