<?php 

	class Programmer
	{
		public string $name;
		public function __construct(String $name)
		{
			$this->name = $name;
		}
	}



	class BackendProgrammer extends Programmer
	{

	}

	class FrontendProgrammer extends Programmer
	{
		
	}

	class Company
	{
		public Programmer $programmer;
	}
	
	$company = new Company;

	$company->programmer = 	new Programmer("Riski");
		var_dump($company);
	$company->programmer = new BackendProgrammer("Geko");
		var_dump($company);
	$company->programmer = new FrontendProgrammer("Queen");
		var_dump($company);
