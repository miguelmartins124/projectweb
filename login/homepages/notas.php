<!Doctype html>
<html>
<head>
    <title>Alunos</title>
    <!--design da pagina-->
    <link rel="icon" href="logo.png" type="image/ico"><!--link ao logotipo do projeto-->
    <link rel="stylesheet" href="../style2.css"><!--link ao ficheiro style2.css-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css"><!--link do bootstrap-->

<body>
<head>    
    <meta charset="ISO 8859-1">

<?php
    session_start();//inicio de sessão
    header("content-Type: text/html; charset=ISO 8859-1", true);
    include "../includes/dbh.inc.php";//include da base de dados
    $sql="SELECT * FROM users WHERE idUsers ='{$_SESSION['userId']}'";//query
    $resultado = $conn->query($sql);//realização da query na base de dados
    while($linha = $resultado->fetch_assoc()){//vai buscar os resultados da query e coloca-os na variável linha
        $nome=$linha['uidUsers'];
        }

        $sql = "SELECT * FROM aluno LEFT JOIN notas on aluno.id_aluno = notas.aluno LEFT JOIN cadeira on notas.cadeira = cadeira.id";//query
        $resultado = $conn->query($sql);//realização da query na base de dados
        if($resultado->num_rows > 0){//se houver resulados na variável resultado
?>
            <!--barra de navgação-->
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

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Numero aluno</th>
                        <th scope="col">Nome</th>
                        <th scope="col">ID-CURSO</th>
                        <th scope="col">cadeira</th>
                        <th scope="col">NOTA</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
<?php
                    while ($linha = $resultado->fetch_assoc()) {//vai buscar os resultados da query e coloca-os na variável linha
?>
                        <tr>
                            <td> <?php echo $linha['id_aluno'];?></td>
                            <td> <?php echo $linha['nome'];?></td>
                            <td> <?php echo $linha['id_curso'];?></td>
                            <td> <?php echo $linha['nome_cadeira'];?></td>
                            <td> <?php echo $linha['nota'];?></td>
                            <td><a href="updatenota.php"><img border=0 alt=Edit src=../../imagens/editar.png width=20 height=20></a></td>
                        </tr>
<?php
                    }
        }$conn->close();//fecho da conexão da base de dados
?>
            </table>
</head>
</body>
</html>