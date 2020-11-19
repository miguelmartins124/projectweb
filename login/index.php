<!DOCTYPE html>
<html>
<head>
    <title>Academia Falcon</title>
    <link rel="icon" href="../imagens/logo.png" type="image/ico"><!--link ao logotipo do projeto-->
</head>
<body>
<?php   
    require "header.php";// execução deste ficheio depende exclusivamente da execução funcional do header.php
?>
<main>
    <div class="wrapper-main">
        <section class="section-default">
<?php 
            if(isset($_SESSION['userId'])) {
                //echo '<p class="login-status">You are logged in!</p>';
            }else {
                //echo '<p class="login-status">You are logged out!</p>';
            }
?>
        </section>
    </div>
</main>
</body>
</html>