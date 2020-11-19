<?php
    session_start();//inicio de sessão
?>
<!Doctype html>
<html>
<head>
    <meta charset="ISO 8859-1">
    <meta name="description" content="Exemplo de meta description">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Academia Falcon</title>
    <link rel="icon" href="../imagens/logo.png" type="image/ico"><!--link ao logotipo do projeto-->
    <link rel="stylesheet" href="style.css"><!--link do ficheiro style.css-->
</head>
<body>
<header>
    </div>
        <nav class="nav-header-main">
            <a class="header-logo" href="index.php"></a>
                <img src="../imagens/logo.png" class="avatar">
            </a>
<?php 
            if(isset($_SESSION['userId'])) {//se o nome do user for definido
?>                       
                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form> 
<?php
            }else {
?> 
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="E-mail/Username">  
                    <input type="password" name="pwd" placeholder="Password...">
                    <input type="submit" name="login-submit">
                </form> 
<?php
            }
?>
        </nav>
</header>
</body>
</html>