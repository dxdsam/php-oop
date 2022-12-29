<?php 

	class Mahasiswa 
	{
		public $name;
		public $nisn;
		public $jurusan = 'Teknik Informatika';
	}

	$mahasiswa1 = new Mahasiswa;
	$mahasiswa1->name='Erik';
	$mahasiswa1->nisn = '4453';
	$mahasiswa1->jurusan = 'Tekinik Mesin';

	$mahasiswa2 = new Mahasiswa;
	$mahasiswa2->name='Erik';
	$mahasiswa2->nisn = '4453';
	$mahasiswa2->jurusan = 'Tekinik Mesin';

	var_dump($mahasiswa1 == $mahasiswa2);
	var_dump($mahasiswa1 === $mahasiswa1);