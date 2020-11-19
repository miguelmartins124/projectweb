<!DOCTYPE html>
<html>
<head>
  <title>Algebra</title>
  <!--design da página-->
  <link rel="icon" href="../login/logo.png" type="image/ico"><!--link ao logotipo do projeto-->
  <link rel="stylesheet" href="../login/style2.css"><!--link ao ficheiro style2.css-->
  <link rel="stylesheet" href="../css/bootstrap.min.css"><!--link do bootstrap-->
</head>
<body>
<?php
  header("content-Type: text/html; charset=ISO 8859-1", true);
?>
  <!--barra de navegação-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img width=60 src="../login/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="../login/homepage.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Próximos Eventos</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../login/includes/logout.inc.php">Sair</a>
        </li>
      </ul>
    </div>
    <p style="margin-right: 5px;"><?php echo $nome; ?></p>
    <a class="navbar-brand" href="#"><img width=50 height=50 src="on.png"></a>
  </nav>
</body>
</html>