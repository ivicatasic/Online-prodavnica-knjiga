<?php
	require('includes/MongoConfig.php');
	header('Content-type: text/html; charset=utf-8');
	if(!empty($_POST))
	{
		$msg="";
		
        $email = $_POST['mail'];
        $query="SELECT u_unm FROM user WHERE u_email='$email'";
        $res=mysqli_query($conn,$query)or error_log("Nije moguće učitati podatke iz baze...");
        $row=mysqli_fetch_assoc($res);
        if ($row == 0) { 
            $msg.= '<li>Ovaj email ne postoji u nasoj bazi...'; 
        }
        
		if(empty($_POST['mail']))
		{
			$msg.="<li>Molimo vas unesite email na koji želite da vas kontaktiramo";
		}

        if(!ereg("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['mail']))
		{
			$msg.="<li>Unesite ispravnu email adresu...";
		}
        
        
		if($msg!="")
		{
			header("location:forgot_pass.php?error=".$msg);
		}
		else
		{
            
            $email=$_POST['mail'];
            $query="SELECT u_unm FROM user WHERE u_email='$email'";
            $res=mysqli_query($conn,$query)or error_log("Nije moguće učitati podatke iz baze...");
            $row=mysqli_fetch_assoc($res);
            
            $password = substr(md5(uniqid(rand(),1)),3,10);
            $pass = md5($password);
            $to = "$email";
            
            $subject = "Povratak lozinke";
            $body = "Pozdrav '$row->u_unm',\n  
            ti ili neko drugi je zahtevao resetovanje lozinke na nasem sajtu. \n 
            Ovde su informacije vezane za tvoj nalog. Uz njihovu pomoc mozes se ponovo prijaviti. \n
            Username: $row->u_unm i lozinka: $pass \n
            Tvoja lozinka je resetovana i molim te registruj se da bi je promenio.\n
            Srdačan pozdrav,\n
            tvoja knjižara Lektira.";
            
            $headers= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers.= "From: nikola.golubovic@pmf.edu.rs"."\r\n";
            $headers.= "CC: ivica.tasic@pmf.edu.rs";
            
            mail($to, $subject, $body, $lheaders);

            $qq = "UPDATE user SET u_pwd='$pass' WHERE u_email='$email'";
            mysqli_query($conn,$qq)or error_log("Nije moguće učitati podatke iz baze...");
            header("location:forgot_pass.php?ok=1");
		}
    }
?>
