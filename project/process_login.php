<?php session_start();

require('includes/config.php');

	header('Content-Type: text/html; charset=utf-8');
	if(!empty($_POST))
	{
		$msg=array();
		
		if(empty($_POST['usernm']))
		{
			$msg[]="No such User";
		}
		
		if(empty($_POST['pwd']))
		{
			$msg[]="Password Incorrect........";
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
			$unm=$_POST['usernm'];
			
			$q="SELECT * FROM USER WHERE u_unm='$unm'";
			//$q="SELECT br_korisnika('$unm');";
			$res=mysqli_query($conn,$q) or error_log("Greska pri logovanju");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pwd']==$row['u_pwd'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['u_unm'];
					$_SESSION['uid']=$row['u_pwd'];
					$_SESSION['status']=true;
					
					if($_SESSION['unm']!="admin")
					{
						header("location:index.php");
					}
					else
					{
						header("location:admin/index.php");
					}
				}
				
				else
				{
					echo 'Netačna lozinka.';
				}
			}
			else
			{
				echo 'Ne postoji korisnik sa takvim imenom.';
			}
		}
	
	}
	else
	{
		header("location:index.php");
	}
			
?>