<?php
	class Display extends DbConnection
    {
        public function displayBook() {
	  
	        $stmt = $this->conn->prepare("select  *  from books");
	        $stmt->execute();
	        $arrays = $stmt->fetchAll(PDO::FETCH_ASSOC);
	        
	        return $arrays;
		}
		
    }
//	$display = new Display();
//
//	$data = $display->displayBook();
	?>