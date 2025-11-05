<?php

    require_once "admin/config.inc.php";

    $sql = "SELECT * FROM guitarras";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

    echo "<h1>Guitarras</h1>";
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Nacionalidade</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($dados = mysqli_fetch_array($resultado)){
    ?>
        <tr>
            <td><?=$dados['Marca']?></td>
            <td><?=$dados['Modelo']?></td>
            <td><?=$dados['Nacionalidade']?></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>
<?php
    }else{
        echo "<h2>Nenhuma guitarra cadastrada no momento.</h2>";
    }