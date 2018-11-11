<?php

// multiple recipients
$to  = 'contato@usinadesons.com.br' . ', '; // note the comma
$to .= 'usinaproducoeseeventos@gmail.com';

// subject
$subject = $_POST['subject'];

// message
$text    = $_POST['message'];
$name    = $_POST['name'];
$toMail  = $_POST['email'];

$message = "<b>Mensagem do Site da Usina de Sons <em>usinadesons.com.br</em>&nbsp;</b></br><b>&nbsp;Nome:&nbsp; </b>".$name."</br>"."<b>&nbsp;Email: &nbsp;</b>".$toMail."</br>"."<b>&nbsp;Mensagem: &nbsp;</b>".$text."</br>";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);


?>
<script>
 location.href="contact2.html"; 
</script>
