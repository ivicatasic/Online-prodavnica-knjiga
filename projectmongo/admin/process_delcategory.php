<?php
require('includes/MongoConfig.php');
	if(!empty($_POST))
	{
		$msg="";
        if(empty($_POST['del']))
		{
			$msg.="<li>Niste uneli sve podatke";
		}
		
		if($msg!="")
		{
            header("location:category.php?error=".$msg);
		}
		else
		{
		

			$delcat=$_POST['del'];
			
			$colection=$client->selectCollection('book_store','category');
			$colection->deleteOne(['cat_nm'=>$delcat]);
			
			header("location:category.php?ok=2");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	