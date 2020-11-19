<!Doctype html>

<link rel="stylesheet" href="style.css"><!--link do ficheiro style.css-->


<main>
    <div class="nav-header-main">
    <img src="../imagens/logo.png" class="avatar">
        <section class="section-default">
            <h1>Registo</h1>
<?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="signuperror">Fill in all fields!</p>';
                }else if ($_GET["error"] == "invaliduidmail") {
                    echo '<p class="signuperror">Invalid username and e-mail!</p>';
                }else if ($_GET["error"] == "invaliduid") {
                    echo '<p class="signuperror">Invalid username!</p>';
                }else if ($_GET["error"] == "invalidmail") {
                    echo '<p class="signuperror">Invalid e-mail!</p>';
                }else if ($_GET["error"] == "passwordcheck") {
                    echo '<p class="signuperror">Your passwords do not match!</p>';
                }else if ($_GET["error"] == "usertaken") {
                    echo '<p class="signuperror">Username already taken!</p>';
                }
            }else if (isset($_GET["signup"])) {
                if($_GET["signup"] == "success"){
                    echo '<p class="signusuccess">Sign up Successful!</p>';
                    header("Location: homepages/homepage3.php");
                }
            }
?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <br>
                <input type="text" name="mail" placeholder="E-mail">
                <br>
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <br>
                <input type="text" name="nivel" placeholder="nivel de acesso"> 
                <br>
                <input type="submit" name="Signup-Submit" value="Registar">
                <br>
                <a href="homepages/homepage3.php">voltar</a>
            </form>
        </section>
    </div>
</main>

