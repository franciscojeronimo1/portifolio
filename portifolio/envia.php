<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$para = "catastomatw1@gmail.com";
$assunto = "Contato Pelo Portfolio";

$corpo = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Mensagem: " . $mensagem;

$cabeca = "From: franciscojeronimo1@hotmail.com\r\n" .
          "Reply-To: " . $email . "\r\n" .
          "X-Mailer: PHP/" . phpversion();

if (mail($para, $assunto, $corpo, $cabeca)) {
    echo "Email enviado com sucesso!";
} else {
    echo "Houve um erro ao enviar o email!";
}
?>
