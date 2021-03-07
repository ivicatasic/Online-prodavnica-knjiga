<?php
require('includes/MongoConfig.php');
	if(!empty($_POST))
	{
		$msg="";
		if(empty($_POST['cat']))
		{
			$msg.="Niste uneli sve podatke";
		}
		
		if($msg!="")
		{
            header("location:category.php?error=1");
		}
		else
		{
	
		
			$cat=$_POST['cat'];
			var_dump($cat);
			$colection=$client->selectCollection('book_store','category');
			$colection->insertOne([
			'cat_id'=>7,
			'cat_nm'=>$cat
			]);
			
			header("location:category.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	