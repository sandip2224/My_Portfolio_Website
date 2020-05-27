    <?php

    $name=$_POST['name'];
    $mailFrom=$_POST['email'];
    $message=$_POST['message'];
    
    $mailTo="sandipan2224@gmail.com";
    $headers="From: ".$mailFrom."\n\n";
    $txt="Message: ".$message;
    
    mail($mailTo, $txt, $headers);
    header("Location: index.html");
?>
