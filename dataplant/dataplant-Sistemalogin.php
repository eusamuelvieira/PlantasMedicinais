<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8498d06d2f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../dataplant/assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="box-login">
        <div class="capa">
        </div>

        <h1>Faça seu login</h1>
        <form method="post" action="login/check">
            <input type="email" name="e-mail" placeholder="usuario@email.com">
            <input type="password" name="password" placeholder="minhasenha@123">

            <button class="btn-login">LOGAR</button>
            <span class="msg_error"><i class="fa-solid fa-triangle-exclamation" style="font-size: 16px; color:FF6D6D; padding-right:5px"></i><p>Tentativa Inválida</p></span>
        </form>
    </div>
</body>
</html>