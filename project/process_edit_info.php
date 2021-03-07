<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fnm']) || empty($_POST['unm']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['mail'])||empty($_POST['city']))
		{
			$msg.="<li>Molimo vas popunite sve tražene podatke";
		}
		
		if($_POST['pwd']!=$_POST['cpwd'])
		{
			$msg.="<li>Unesite ponovo lozinku.....";
		}
		
		if(!preg_match("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['mail']))
		{
			$msg.="<li>Unesite ispravnu email adresu...";
		}
		
		
		if(strlen($_POST['pwd'])>20)
		{
			$msg.="<li>Molimo Vas unesite kraću lozinku....";
		}
		
		if(is_numeric($_POST['fnm']))
		{
			$msg.="<li>Ime mora biti tekstualnog formata...";
		}
		
		if($msg!="")
		{
			header("location:edit_info.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['fnm'];
			$unm=$_POST['unm'];
			$pwd=$_POST['pwd'];
			$email=$_POST['mail'];
			$contact=$_POST['contact'];
			$city=$_POST['city'];
			
			
			
			$query="UPDATE user SET u_fnm='$fnm', u_unm='$unm', u_pwd='$pwd', u_contact='$contact', u_city='$city' WHERE u_email='$email'";
			mysqli_query($conn,$query) or error_log("Nije moguće registrovati novog korisnika...");
			header("location:logout.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>