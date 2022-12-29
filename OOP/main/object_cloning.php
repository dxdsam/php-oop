<?php 

	class Student 
	{
		public $id;
		public String $name = "Loggis";
		public int $value = 1;
		private $kelas = 'XII RPL B';

		public function setKelas(String $kelas)
		{
			$this->kelas = $kelas;
		}

		public function __clone()
		{
			unset($this->value);
		}
	}

	$student1 = new Student;
	var_dump($student1);

	// Untuk melakukan clone / duplikasi objek kita dapat mengguakan keyword clone
	$student2 = clone $student1;
	$student2->name = 'Erik';
	$student2->setKelas('XI TKR A');
	var_dump($student2);