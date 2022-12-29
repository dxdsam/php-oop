<?php 

	class Manager 
	{
		protected $name = "Adrian";

		public function sayHello(?String $name)
		{
			if (isset($name)) {
				echo "Halo $name, my name is manager $this->name";
			}else{
				echo "Halo $this->name";
			}
		}
	}

	class VicePresident extends Manager
	{
		public function sayHello(?String $name)
		{
			if (isset($name)) {
				echo "Halo $name, my name is VP $this->name";
			}else{
				echo "Halo $this->name";
			}
		
		}
	}


	$manager = new Manager;
	$vp = new VicePresident;
	$vp->sayHello('Agung');
