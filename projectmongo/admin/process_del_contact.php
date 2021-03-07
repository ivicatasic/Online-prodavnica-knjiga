<?php

	require('includes/MongoConfig.php');
		        	
			$del=(int)$_GET['sid'];
			$colection=$client->selectCollection('book_store','contact');
			$colection->deleteOne(['con_id'=>$del]);
			
			
			header("location:contact.php?ok=1");

?>