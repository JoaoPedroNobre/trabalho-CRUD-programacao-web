<?php

    require_once "config.inc.php";

    echo "<a href='?pg=guitarras-form'>Cadastrar guitarra</a>";

    echo "<h1>Lista de guitarra</h1>";

    $sql = "SELECT * FROM guitarras";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "ID: ".$dados['id']."<br>";
            echo "Marca: ".$dados['Marca']."<br>";
            echo "Modelo: ".$dados['Modelo']."<br>";
            echo "Nacionalidade: ".$dados['Nacionalidade']."<br>";
            echo " <a href='?pg=guitarras-form-alterar&id=$dados[id]'>Editar</a>";
            echo "| <a href='?pg=guitarras-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhuma guitarra encontrada!</h3>";
    }


