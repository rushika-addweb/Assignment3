///// step9//////
<?php
$task =[
'name'=> 'John',
'work'=>'maths',
'status'=>true,
];



require'require5.php';


?>


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
				

				</strong>
				<?php
				if($task['status'])
				{

				echo'Finished';
			}
			else{
			
			echo"Not Finished";
		}

				?>
			
			</li>

		
	</ul>	

</body>
</html>