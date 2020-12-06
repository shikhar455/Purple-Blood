<html>
<body>
<div class="container">
  <div class="row ">
  <?php
   if(isset($_REQUEST['submit'])){
    $ToEmail = 'shishirrc2@gmail.com'; 
    $EmailSubject = 'Enquiry'; 
    $mailheader = "From: ".$_REQUEST["email"]."\r\n";
    $mailheader .= "Reply-To: ".$_REQUEST["email"]."\r\n";   
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_REQUEST["name"]."\n"; 
    $MESSAGE_BODY .= "Email: ".$_REQUEST["email"]."\n";
    $MESSAGE_BODY .= "Subject: ".$_REQUEST["subject"]."\n"; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_REQUEST["message"])."\n"; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
    ?>
       
            <strong>Thank You</strong><br>Thank you for your interest in GyaanKriti's services. 
            This information will enable us to route your request to the appropriate person. You should receive a response within 48 hours
        
<?php }
?>

</body>
</html>