<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fnm']) || empty($_POST['unm']) || empty($_POST['gender']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['mail'])||empty($_POST['city']))
		{
			$msg.="<li>Molimo vas popunite sve tražene podatke";
		}
		
		if($_POST['pwd']!=$_POST['cpwd'])
		{
			$msg.="<li>Unesite ponovo lozinku.....";
		}
		
		if(!preg_match("/^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$/i",$_POST['mail']))
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
			header("location:register.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['fnm'];
			$unm=$_POST['unm'];
			$pwd=$_POST['pwd'];
			$gender=$_POST['gender'];
			$email=$_POST['mail'];
			$contact=$_POST['contact'];
			$city=$_POST['city'];
			
			
		
			
			
			//$query="INSERT INTO user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_city)
			//VALUES('$fnm','$unm','$pwd','$gender','$email','$contact','$city')";
			$query=("call registruj_korisnika('$fnm','$unm','$pwd','$gender','$email','$contact','$city')");
			mysqli_query($conn,$query) or error_log("Nije moguće registrovati novog korisnika...");
			header("location:register.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>