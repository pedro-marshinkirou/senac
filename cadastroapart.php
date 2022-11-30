<?php

include("metodos_funcion.php");
include("validation.php");

?>

<html>

<head>
    <meta charset="UTF-8">
    <title> Cadastro de Edifi </title>
    <link href="estilo.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div id="logo"> 
        <h1 id="tituloLogo">cadastrar apê</h1>
    </div>

    <?php    
    listaapart()
    ?>

    <form method="POST">
        <label>número do apto:</label><input type="text" name="numero_apto" id="numero_apto"><br>
        <label>Numero da área:</label><input type="text" name="area_apto" id="area_apto"><br>
        <label>Código do edificio:</label><input type="text" name="codigo_edificio" id="codigo_edificio"><br>
        <label>Código do morador:</label><input type="text" name="codigo_morador" id="codigo_morador"><br>
        <label>Nome do edificio:</label><input type="text" name="nome_edi" id="nome_edi"><br>
        <label>valor:</label><input type="text" name="valor" id="valor"><br>
        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    </form>

</body>

</html>

<?php
if (isset($_POST["numero_apto"])){
    $napto = $_POST["numero_apto"];
    $narea = $_POST["area_apto"];
    $codedi = $_POST["codigo_edificio"];
    $codmo = $_POST["codigo_morador"];
    $nomedi = $_POST["nome_edi"];
    $val = $_POST["valor"];
}

if (isset($codedi)){
    $query = "SELECT * FROM edificio WHERE codigo_edificio = $codedi";
    $select = mysqli_query($conn, $query);
    if($select){
        echo"<script language='javascript' type='text/javascript'>
        alert('codigo do edificio existe');window.location.
        href='cadastroapart.php'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>
        alert('impossivel cadastrar edificio, codigo inexistente');window.location.
        href='cadastroapart.php'</script>";
    }
  }

if (isset($codedi)){
    $query = "SELECT * FROM morador WHERE codigo_morador = $codmo";
    $select = mysqli_query($conn, $query);
    if($select){
        echo"<script language='javascript' type='text/javascript'>
        alert('codigo do morador existe');window.location.
        href='cadastroapart.php'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>
        alert('impossivel cadastrar morador, codigo inexistente');window.location.
        href='cadastroapart.php'</script>";
    }
  }

if (isset($napto,$narea,$codedi,$codmo,$nodedi,$val)){
    $query = "INSERT INTO apartamento (numero_apto, area_apto, codigo_edificio, codigo_morador, nome_edi, valor) VALUES ('$napto','$narea','$codedi','$codmo','$nomedi','$val')";
    echo "$query";
    $insert = mysqli_query($conn, $query);
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Apartamento cadastrado com sucesso!');window.location.
        href='cadastroapart.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse apartamento');window.location
          .href='cadastroapart.php'</script>";
        }
  }
?>
