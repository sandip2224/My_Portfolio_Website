<?php

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];
    
    $mailTo="sandipan2224@gmail.com";
    $headers="FROM: ".$mailFrom;
    $txt="You have received an email from ".$name.".\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>