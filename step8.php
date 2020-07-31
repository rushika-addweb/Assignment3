///// step8//////
<?php
$task =[
'name'=> 'John',
'work'=>'maths',
'status'=>true,
];



require'require4.php';


?>
////require4.php////
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
			<li>
				<strong>name:
					<?php echo$task['name'];
					?>
						
					</strong>
			</li>
			<li>
				<strong>work:
					<?php echo$task['work'];
					?>
						
					</strong>
			</li>
			<li>
				<strong>status:
					<?php echo$task['status']?'Done' : 'Notdone';
					?>
					
				</strong>
			</li>

		
	</ul>	

</body>
</html>