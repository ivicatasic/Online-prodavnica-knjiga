<?php

	require('includes/config.php');
		        	
			$query="DELETE FROM contact WHERE con_id =".$_GET['sid'];
		
			mysqli_query($conn,$query) or error_log("Nije moguće obrisati pitanje...");
			
			
			header("location:contact.php?ok=1");

?>