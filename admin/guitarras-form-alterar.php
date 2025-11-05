<?php
    require_once "config.inc.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM guitarras WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $cliente = mysqli_fetch_array($resultado);


?>

<h2>Cadastro de Guitarras</h2>
<form action="?pg=guitarras-alterar" method="post">
    <input type="hidden" name="id" value="<?=$cliente['id']?>">
    <label>Marca:</label>
    <input type="text" name="Marca" value="<?=$cliente['Marca']?>"><br>
    <label>Modelo:</label>
    <input type="text" name="Modelo" value="<?=$cliente['Modelo']?>"><br>
    <label>Nacionalidade:</label>
    <input type="text" name="Nacionalidade" value="<?=$cliente['Nacionalidade']?>"><br>

    <input type="submit" value="Alterar guitarra">
</form>

<?php
    }else{
        echo "<h2>Nenhuma guitarra cadastrado!</h2>";
    }
?>
