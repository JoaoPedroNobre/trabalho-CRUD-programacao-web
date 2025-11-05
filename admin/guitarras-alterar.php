<?php

require_once "config.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente = $_POST["Marca"];
    $cidade = $_POST["Modelo"];
    $estado = $_POST["Nacionalidade"];
    $id = $_POST["id"];

    $sql = "UPDATE guitarras SET 
            Marca = '$cliente',
            Modelo = '$cidade',
            Nacionalidade = '$estado'
            WHERE id = '$id'";

    $executa = mysqli_query($conexao, $sql);
    if($executa) {
        echo "<h2>Alteração realizada com sucesso.</h2>";
        echo "<a href='?pg=guitarras-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao alterar cadastro.</h2>";
        echo "<a href='?pg=guitarras-admin'>Voltar</a>";
    }
}else{
    echo "<h2>Acesso negado.</h2>";
    echo "<a href='?pg=guitarras-admin'>Voltar</a>";
}