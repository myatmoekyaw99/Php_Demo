<?php

$title="Book lists"; 
$products = [
		['name' => 'Php for beginner',
		 'author' => 'Shean fuff',
		 'release_date' => 2021,		
		],
		['name' => 'Html for beginner',
		 'author' => 'Dean cook',
		 'release_date' => 2011,		
		],
		['name' => 'Java for beginner',
		 'author' => 'Brook Lukey',
		 'release_date' => 2020,		
		],
	];
	$movies = [
		[
			'name' => 'Back to the Future',
			'releaseYear' => 1985,
		],

		[
			'name' => "Weekend at Bernie's",
			'releaseYear' => 1989,
		],

		[
			'name' => 'Pirates of the Caribbean',
			'releaseYear' => 2003,
		],

		[
			'name' => 'Interstellar',
			'releaseYear' => 2014,
		],
	];

	$filteritems = array_filter($movies,function ($book){
		return $book['releaseYear'] > 1950 && $book['releaseYear'] < 2020 ;
	});
	
$owner = 'admin';

$heading = "Home";

 view("index.view.php",[
	'heading' => $heading,
	'title' => $title,
	'owner' => $owner,
	'products' => $products,
	'filteritems' => $filteritems
 ]);

