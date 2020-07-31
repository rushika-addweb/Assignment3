///Step18////

//// Array filtering///

///Array_filter///
<?php

	class Posts
	{
		public $title;
		
		public $published;

		public function __construct($title,  $published)
		{
			$this->title = $title;
			

			$this->published = $published;
		}
	}

	$posts = [
		new Posts('First post', 'done 1st post', true),
		new Posts('Second Post', 'done 2nd post', true),
		new Posts('Third Post', 'done 3rd post', false),

	];


	$done = array_filter($posts, function ($post) {
		return $post->published;
	});
	var_dump($done);
	?>
/////Array_map////
<?php
function show_language($n, $m)
{
    return "The number {$n} is called {$m} in language";
}

function map_language($n, $m)
{
    return [$n => $m];
}

$a = [1, 2, 3, 4, 5];
$b = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$c = array_map('show_language', $a, $b);
print_r($c);

$d = array_map('show_language', $a , $b);
print_r($d);
?> 
////Array column///
<?php


	$result = array(
		array(
			'id' => 101,
			'first_name' => 'Rahul',
			'last_name' => 'Doe',
		),
		array(
			'id' => 201,
			'first_name' => 'Rohan',
			'last_name' => 'Smith',
		),
		array(
			'id' => 303,
			'first_name' => 'Risabh',
			'last_name' => 'Jones',
		),


	);

	$first_names = array_column($result, 'first_name');
	print_r($first_names);
	?>