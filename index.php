<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Mailer</title>
    </head>
    <body>
        <form action="email.php" method="post">
            <table>
                <tr>
                    <td><span>Username(Email)</span></td>
                    <td><input type="email" name="username"/></td>
                </tr>
                <tr>
                    <td><span>Senha</span></td>
                    <td><input type="text" name="senha"/></td>
                </tr>
                <tr>
                    <td><span>Remetente(Email)</span></td>
                    <td><input type="email" name="remetente"/></td>
                </tr>
                <tr>
                    <td><span>Nome Remetente</span></td>
                    <td><input type="text" name="nomeRemetente"/></td>
                </tr>
                <tr>
                    <td><span>Destinatário(Email)</span></td>
                    <td><input type="email" name="destinatario"/></td>
                </tr>
                <tr>
                    <td><span>Nome Destinatário</span></td>
                    <td><input type="text" name="nomeDestinatario"/></td>
                </tr>
                <tr>
                    <td><span>Assunto</span></td>
                    <td><input type="text" name="assunto"/></td>
                </tr>
                <tr>
                    <td><span>Mensagem</span></td>
                    <td><textarea name="mensagem"></textarea></td>
                </tr>
            </table>
            <p style="padding-top: 15px">
                <span>&nbsp;</span>
                <input class="submit" type="submit" value="Enviar" />
            </p>
        </form>
    </body>
</html>