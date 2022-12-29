<?php 

	interface Cat 
	{
		function __construct(string $jenis);
	}


	$anggora = new class("Anggora") implements Cat 
	{
		public function __construct(string $jenis)
		{
			echo "Ini adalah jenis kucing $jenis";
		}
	};

