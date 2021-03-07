<?php
require('includes/MongoConfig.php');
	if(!empty($_POST))
	{
		$msg="";
		if(empty($_POST['subcat']) || empty($_POST['parent']))
		{
			$msg.="Niste uneli sve podatke";
		}
		
		if($msg!="")
		{
           header("location:subcategory.php?error=1"); 
		}
		else
		{
		
			
		
			$parent = $_POST['parent'];
			$subcat=$_POST['subcat'];
			
			
			$colection=$client->selectCollection('book_store','subcat');
			$colection->insertOne([
			'subcat_id'=>15,
			'parent_id'=>$parent,
			'subcat_nm'=>$subcat
			]);
			
			
			
			header("location:subcategory.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	