///// step7//////
<?php
$task =[
'name'=> 'John',
'work'=>'maths',
'status'=>'completed'];



require'require3.php';


?>
////require3.php////
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		


<?php foreach ($task as  $value=>$tasks) {
			echo "<li>
				$value =>.$tasks. '<br>'
			</li> ";

		}
		?>

			
		
	</ul>	

</body>
</html>