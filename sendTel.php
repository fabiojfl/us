<?php

// multiple recipients
$to  = 'contato@usinadesons.com.br' . ', '; // note the comma
$to .= 'usinaproducoeseeventos@gmail.com';

$name      = $_POST['name'];
$telefone  = $_POST['telefone'];

// subject
$subject = "Ligue para:".$name;

// message
$message = $telefone;


// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);


?>
<script>
 location.href="contact-tel2.html"; 
</script>