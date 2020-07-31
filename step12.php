////////////////
Rushika Mishra
step 12

//// function.php////
<?php

function dd($data){
	
	echo "<pre>";
	
	die (var_dump($data));
	
	echo"</pre>";
}


?>
/////step12.php////
<?require 'function.php';

class task{
	
			public $description;
			
			
			
			public $completed = false;

			public function __construct($description)
			{
				$this->description = $description;
			}
		
			public function completed()
			{
				$this->completed =true;
			}
			
		
			public function isCompleted()
			{
				return$this->completed;
			}
			
			
			
		} 
		
		//$task = new task('Go to the store');
		
		
		//$task->completed();
		
		 ///var_dump($task->isCompleted());
			
			$tasks = [
			
			new Task ('Go to the store'),
			
			new Task ('Finish the work'),
			
			new Task ('Clean My room')
			
			];
			
			//dd($tasks);
			
			$tasks[0]->completed();
			
			require 'index.view.php';
?>
////index.view.php///
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<ul>
		<?php foreach ($tasks as $task):?>
		<li>

			<?php if ($task->completed):?>
				<strike> 
				<?php endif;?>

			<?php echo"$task->description";?>
			<?php if ($task->completed):?>
		</strike>
	<?php endif;?>
		</li>
		<?php endforeach; ?>

	</ul>

</body>
</html>
/////////