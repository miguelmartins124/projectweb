<?php

    include "../includes/dbh.inc.php";//include da base de dados

    if(isset($_POST['name']) && !empty($_POST['name']){//se a variável name estiver preenchida
        $nome = $_POST['name'];
        $data = date("Y-m-d");
        $mensagem = $_POST['mensagem'];
        $cadeira= $_POST['cadeira'];
        if($cadeira=='algebra'){// estes ciclos if servem para diferenciar a cadeira na submissõ para a base de dados
            $cadeira=1;
        }else if($cadeira=='Base Dados'){
            $cadeira=2;
        }else if($cadeira=='Sistemas Digitais'){
            $cadeira=3;
        }
        $sql="INSERT into sumario (data_s,sumario,cadeira_s, nome) values ('$data', '$mensagem','$cadeira','$nome')";//query
        $resultado = $conn->query($sql);//realização da query na base de dados
        header('location:sumario.php');
    }
