<?php 

	function getGenap(int $max): iterator 
	{

		$genap = [];

		for ($i=1; $i <= $max; $i++) { 
			if($i % 2 == 0){
				$genap[] = $i;
			}
		}

		return new ArrayIterator($genap);
	}

	foreach (getGenap(100) as $value) {
		echo "Genap : $value".PHP_EOL;
	}

	function getGanjil(int $max): iterator 
	{

		for ($i=1; $i <= $max; $i++) { 
			if($i % 2 == 1){
				yield $i;
			}
		}

	}

	foreach (getGanjil(100) as $value) {
		echo "Ganjil : $value".PHP_EOL;
	}
