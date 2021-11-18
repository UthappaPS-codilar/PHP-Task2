<?php
	class Validate
	{
	
	public function validatedata(){
	
	
	$pin = $_POST['PIN'];
	if ($pin==='15111')
	{
	header('Location: Insert.php');
	}
	
	else{
	header('Location: pinForm.php?flag=1');
}}
	}

	?>