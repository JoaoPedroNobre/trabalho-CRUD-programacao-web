<?php

    require_once "config.inc.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM guitarras WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);
    if($resultado){
       echo "<h2>Guitarra excluida com sucesso!</h2>";
       echo "<br><a href='?pg=guitarras-admin'>Listar Guitarras</a>";
    }else{
        echo "<h2>Erro ao excluir guitarra!</h2>";
        echo "<br><a href='?pg=guitarras-admin'>Voltar</a>";
    }

