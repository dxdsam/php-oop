<?php 

	class Hewan
	{
		private $nama;
		private $jenis;
		private bool $mamalia = true;

		public function setNama(String $nama):void
		{
			$this->nama = $nama;
		}

		public function getNama()
		{
			return $this->nama;
		}

		public function setJenis(String $jenis):void
		{
			$this->jenis = $jenis;  
		}

		public function getJenis()
		{
			return $this->jenis;
		}

		public function setMamal(bool $mamal)
		{
			 $this->mamalia = $mamal;
		}

		public function isMamal():bool
		{
			return $this->mamalia;
		}
	}

	$hewan = new Hewan;
	$hewan->setNama('Kucing');
	$hewan->setJenis('Omnivora');
	$hewan->setMamal(true);

	var_dump($hewan->getNama());
	var_dump($hewan->getJenis());
	var_dump($hewan->isMamal());
	// var_dump($hewan->isMamal());


