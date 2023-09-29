<?php
    $mensagem = $_POST['message'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "contato@reinaldo-santos.veexi.com.br";
    $to = "reinaldosantospersonal@gmail.com";
    $subject = "{$subject}";
    $message = "Nome: ".$name."\n Assunto: ".$subject."\n Email: ".$email."\n Mensagem: ".$mensagem;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "<script>alert('E-mail enviado')</script>";
    
    echo "<a href='https://reinaldosantos.dev'>Voltar</a>";
?>