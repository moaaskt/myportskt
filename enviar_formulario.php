<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Configurar o destinatário e o assunto
    $to = 'moacirneto59@gmail.com'; // Seu e-mail
    $subject = 'Novo Contato de ' . $nome;

    // Mensagem
    $message = "Nome: $nome\n";
    $message .= "Email: $email\n";
    $message .= "Mensagem:\n$mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Seu e-mail foi enviado com sucesso!"); window.location.href = "contato.html";</script>';
    } else {
        echo '<script>alert("Houve um problema ao enviar seu e-mail. Tente novamente mais tarde."); window.location.href = "contato.html";</script>';
    }
}
?>
