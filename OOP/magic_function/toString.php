<?php 

	class Vegetable
	{
		public $name = 'tomat';
		public $taste = 'masam';

		public function __toString(): String
		{
			return "Ini adalah $this->name, sayuran ini rasanya $this->taste";
		}

	}

	$sayur = new Vegetable;
	echo($sayur);