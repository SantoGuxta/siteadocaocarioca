<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['message']);

    $to = "cariocaadocao@gmail.com";
    $subject = "Nova Mensagem do Site de Adoção";
    $body = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha no envio da mensagem.";
    }
}
?>
