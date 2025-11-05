<?php

    require_once "config.inc.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cliente = $_POST["Marca"];
        $cidade = $_POST["Modelo"];
        $estado = $_POST["Nacionalidade"];

        $sql = "INSERT INTO guitarras (Marca, Modelo, Nacionalidade) 
            VALUES ('$cliente', '$cidade', '$estado')";

        $executa = mysqli_query($conexao, $sql);
        if($executa) {
            echo "<h2>Cadastro realizado com sucesso.</h2>";
            echo "<a href='?pg=guitarras-admin'>Voltar</a>";
        }else{
            echo "<h2>Erro ao cadastrar.</h2>";
            echo "<a href='?pg=guitarras-admin'>Voltar</a>";
        }
    }else{
        echo "<h2>Acesso negado.</h2>";
        echo "<a href='?pg=guitarras-admin'>Voltar</a>";
    }


