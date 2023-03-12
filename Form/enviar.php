<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assunto = 'Email do Site';
$remetente = 'valterbonfim2014@gmail.com';


$conteudo = utf8_decode('Nome: ' .$nome ."\r\n"."\r\n" .'
Email: ' .$email ."\r\n"."\r\n"."\r\n".'Mensagem: ' .$mensagem ."\r\n"."\r\n");

$cabeçalhos = "From: " . $email;

mail($remetemte, $assunto, $mensagem, $cabeçalhos);


?>
<script>alert('Enviado com Sucesso');</script>
<meta http-equiv="refresh" content="0; url=index.php">