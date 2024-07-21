<?php
	
	if(isset($_POST['deleteTodoSubmit'])){
		include_once('../classes/todoController.php');
		$id = $_POST['id'];
		
		$deleteTodo = new TodoController();
		$todoDeleted = $deleteTodo->deleteTodo($id);

		if($todoDeleted){
			header("Location:../index.php");
		}else{
			echo "Something Went Wrong";
		}
	}

?>