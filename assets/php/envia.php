<?php

$nome = addslashes($_POST["nome"]);
$email = addslashes($_POST["email"]);
$telefone = addslashes($_POST["telefone"]);

$para = "wervelin.206@gmail.com";
$assunto = "Coleta de dados - Portfólio";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

$cabeca = "From: teste@port.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo ("E-mail enviado com sucesso!");
}
else("Houve um erro ao enviar o email");

?>