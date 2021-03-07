<?php session_start();

require('includes/MongoConfig.php');

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
			
			$colection=$client->selectCollection('book_store','user');
	        
	        $res=$colection->find(['u_unm'=>$unm]);
	
	        $data=$res->toArray();
	        $unm="";
			$pwd="";
	        foreach($data as $r){
	           $unm=$r['u_unm'];
	           $pwd=$r['u_pwd'];
			}
			
			
			if(!empty($data))
			{
				if($_POST['pwd']==$pwd)
				{
					$_SESSION=array();
					$_SESSION['unm']=$unm;
					$_SESSION['uid']=$pwd;
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