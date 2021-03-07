<?php
require('includes/config.php');	
	
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
		
		if(is_numeric($_POST['email']))	//See this validation for @,21212 Later
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
			
			
			$query="INSERT INTO CONTACT(con_nm,con_email,con_query)
			VALUES('$nm','$email','$question')";
			
			mysqli_query($conn,$query) or error_log("Greška pri prosledjivanju pitanja...");
			
			header("location:contact.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>