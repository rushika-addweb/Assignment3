///// step6//////
<!DOCTYPE html>

	<?php
	$animal =
	[
		"Dog",
		"cat",
		"horse",
		"cow",
		"rat"
	];

		require'require2.php';

	?>
////require2.php////
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<?php
		foreach ($animal as $animals)
			echo "<li>$animals</li>";
		
		?>
	</ul>

</body>
</html>