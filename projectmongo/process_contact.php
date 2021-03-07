<?php
require('includes/MongoConfig.php');	
	
	if(!empty($_POST))
	{
		$msg=array();
		
		if(empty($_POST['nm']) || empty($_POST['email']) || empty($_POST['query']))
		{
			$msg[]="Popunite sve podatke.";
		}
		
				
		if(is_numeric($_POST['fnm']))
		{
			$msg[]="Ime ne sme sadržati brojeve.";
		}
		
		if(is_numeric($_POST['email']))	
		{
			$msg[]="Pogrešan unos e-maila.";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			$nm=$_POST['nm'];
			$email=$_POST['email'];
			$question=$_POST['query'];
			
			$colection=$client->selectCollection('book_store','contact');
			$colection->insertOne([
			'con_id'=>6,
			'con_nm'=>$nm,
			'con_email'=>$email,
			'con_query'=>$question
			]);
			
			header("location:contact.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>