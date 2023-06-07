<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="loginPage" >
        
        <form id="form_login" name="form_login" class="form_login" method="post" action="valida_login.php">
            
            
            
            <div class="agrupamento_login">
                <h2 class="titleLogin">Login</h2>

                <div>

         \           <div><label>Digite seu login</label></div>	

                    <div><input type="text" id="nome_login" name="nome_login" required autofocus></div>

                    <div><label>Digite sua senha</label></div>

                    <div><input type="password" id="senha_login" name="senha_login" required></div>

                    <div><input type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>

                </div>

            </div>

        </form>
</div>
    
</body>
</html>