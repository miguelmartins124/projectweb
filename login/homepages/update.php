<?php  
    include "../includes/dbh.inc.php";//include da base de dados
    $nr_nota = $_GET['numero'];

    for($i = 1; $i < $nr_nota; $i++){
        if(!empty($_GET[$i]) && !empty($_GET['id'.$i]) && !empty($_GET['cadeira'.$i])){
            $nota = $_GET[$i];
            $id = $_GET['id'.$i];
            $cadeira = $_GET['cadeira'.$i];
            $select = "SELECT * FROM notas WHERE aluno = '$id'";//query
            $resultado = $conn->query($select);//realizaчуo da query na base de dados
                if($resultado->num_rows > 0){//se houver resultados da variсvel resultado
                    $sql = "UPDATE notas SET nota = '$nota', cadeira = '$cadeira' WHERE aluno = '$id'";//query
                    $result = $conn->query($sql);//realizaчуo da query na base de dados
                }else{
                    $sql = "INSERT INTO notas (aluno, nota, cadeira) VALUES ('$id', '$nota', '$cadeira')";//query
                    $result = $conn->query($sql);//realizaчуo da que na base de dados
                }
                header("Location: notas.php");
        }
    }

?>