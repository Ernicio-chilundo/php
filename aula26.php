<?php
    $vmail = $_POST['email_txt'];
    $vassunto = $_POST['assunto_txt'];
    $msg = $_POST['msg_txt'];

    if(mail($vmail, $vassunto, $msg,'From:outroEmail.@gmail.com\nReply-To:res_canal.@gmail.com')){
        echo 'Mensagem enviada!';
        echo '<a href=aula26.php target=_self>voltar</a>';
    }else{
        echo 'Erro ao enviar, tente novamente';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 26 php - enviado e-mail</title>
</head>
<body>
    <form name="email" method="post" action="aula26.php">
        <label>E-mail:</label><br>
        <input type="text" name="email_txt"><br>
        <label>Assunto:</label><br>
        <input type="text" name="assunto_txt"><br><br>
        <label>Mensagem</label>
        <textarea name="msg_txt" rows="5" cols="50"></textarea><br><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>