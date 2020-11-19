<!DOCTYPE html>
<html>
<head>
  <title>Funcion�rio</title>
  <!--design da pagina-->
  <link rel="icon" href="logo.png" type="image/ico"><!--link ao logotipo do projeto-->
  <link rel="stylesheet" href="../style2.css"><!--link ao ficheiro style2.css-->
  <link rel="stylesheet" href="../../css/bootstrap.min.css"><!--link do bootstrap-->
</head>
<body>
  <!--boostraps-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <header class="menu-principal">
    <!--design do header-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
<?php
    session_start();//inicio de sess�o
    include "../includes/dbh.inc.php";//include da base de dados
    header("content-Type: text/html; charset=ISO 8859-1", true);

    $sql="SELECT * FROM users WHERE idUsers ='{$_SESSION['userId']}'";//query
    $resultado = $conn->query($sql);//realiza��o da query na base de dados
    while($linha = $resultado->fetch_assoc()){//vai buscar os resultados da query e coloca-os na vari�vel linha
      $nome=$linha['uidUsers'];
    }
?>
    <!--barra de navega��o-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img width=60 src="../../imagens/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Hor�rio</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../signup.php">Registo</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../includes/logout.inc.php">Sair</a>
          </li>
        </ul>
      </div>
      <p style="margin-right: 5px;"><?php echo $nome; ?></p>
      <a class="navbar-brand" href="#"><img width=50 height=50 src="../../imagens/on.png"></a>
    </nav>
</body>
</html>