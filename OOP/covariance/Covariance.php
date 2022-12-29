<?php 
	
	require_once 'Animal.php';
	require_once 'AnimalShelter.php';
	
	
	$catShelter = new \Data\CatShelter;
	$cat = $catShelter->adopt('luna');
	$cat->run();

