<?php

	
	class InsertInto extends DbConnection
	{
		public function insert()
		{
			$book_id=$_POST['book_id'];
			
			$book_name =$_POST['book_name'];
			$book_author =$_POST['book_author'];
			
			$book_image =$_POST['image'];
			$book_published=$_POST['published'];
			$sql="INSERT INTO books VALUES ('$book_id','$book_name','$book_author','$book_image','$book_published')";
			$con= $this->conn;
			$status=$con->exec($sql);
			
			if($status==true) {
				header('Location: Insert.php?status=1');
			}
			else{
				header('Location: Insert.php?statusFail=1');
			}
		}
	}
	
	