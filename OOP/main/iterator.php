<?php 

	// class Orang implements iteratorAggregate
	// {
	// 	public $first = 'Satu';
	// 	public $second = 'Dua';
	// 	private $third = 'Tiga';
	// 	protected $forth = 'Empat';

	// 	public function getIterator()
	// 	{
	// 		$array = [
	// 			"pertama" => "$this->first",
	// 			"kedua" => "$this->second",
	// 			"ketiga" => "$this->third",
	// 			"keempat" => "$this->forth"
	// 		];

	// 		$iterator = new ArrayIterator($array);
	// 		return $iterator;
	// 	}

	// }

	// $orang = new Orang;
	// foreach ($orang as $properti => $nilai) {
	// 	echo "$properti : $nilai".PHP_EOL;
	// }

 	class Car implements IteratorAggregate
 	{
 		public $name = 'Toyota';
 		public $jenis = 'Sedan';
 		public $keluaran = '2017';

 		public function getIterator()
 		{
 			$mobil = [
 				'nama' => $this->name,
 				'jenis' => $this->jenis,
 				'keluaran'=>$this->keluaran
 			];

 			return new ArrayIterator($mobil);
 		}
 	}

 	$cars = new Car;
 	foreach ($cars as $car => $value) {
 		echo "$car : $value".PHP_EOL;
 	}