<!DOCTYPE html>
<html>
<head>
  <title>horarios</title>
  <!--design da pagina-->
  <link rel="icon" href="logo.png" type="image/ico"><!--link ao logotipo do projeto-->
  <link rel="stylesheet" href="../style2.css"><!--link ao ficheiro style2.css-->
  <link rel="stylesheet" href="../style3.css"><!--link ao ficheiro style3.css-->
  <link rel="stylesheet" href="../../css/bootstrap.min.css"><!--link do bootstrap-->
</head>
<body>
<?php
  session_start();//inicio de sess�o  
  include "../includes/dbh.inc.php";//include de base dados
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
            <a class="nav-link" href="homepage.php">Voltar <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../includes/logout.inc.php">Sair</a>
          </li>
        </ul>
      </div>
      <p style="margin-right: 5px;"><?php echo $nome; ?></p>
      <a class="navbar-brand" href="#"><img width=50 height=50 src="../../imagens/on.png"></a>
      
    </nav>
    <section class="content">

      <div class="contato">
        <h3> Sumario Aula</h3>
        <form class="form" method="POST" action=>
          <input class="field" name="name" placeholder="Nome">
          <input class="field" name="cadeira" placeholder="Cadeira">
          <textarea class="field" name="meNsage" placeholder="Digite o Sum�rio"></textarea>
          <input type="submit" value="enviar">
        </form>
      </div>
    </section>    
</body>
</html>
