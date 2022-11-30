<?php

include("metodos_funcion.php");

?>

<html>

<head>
    <meta charset="UTF-8">
    <title> Cadastro de Edificio </title>
    <link href="estilo.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div id="logo"> 
        <h1 id="tituloLogo">cadastrar edf</h1>
    </div>

    <?php
    listaedif()
    ?>

    <form method="POST">
        <label>Nome:</label><input type="text" name="nome_edi" id="nome_edi"><br>
        <label>CEP:</label><input type="text" name="cep" id="cep"><br>
        <label>Numero:</label><input type="text" name="numero" id="numero"><br>
        <label>Complemento:</label><input type="text" name="complemento" id="complemento"><br>
        <label>Data de Construcao:</label><input type="text" name="data_construcao" id="data_construcao"><br>
        <label>Data de Vistoria:</label><input type="text" name="data_vistoria" id="data_vistoria"><br>
        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    </form>    

</body>

</html>

<?php
if (isset($_POST["nome_edi"])){
    $nome = $_POST["nome_edi"];
    $cep = $_POST["cep"]; 
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $datavistoria = $_POST["data_vistoria"];
    $dataconstrucao = $_POST["data_construcao"];
} else {
}

if(isset($nome)){
    if($nome == "" || $nome == null)
    {
        echo "Nome não pode estar vazio!";
    }
    else
    {
        $query = "INSERT INTO edificio (cep, numero, data_construcao, data_vistoria, complemento, nome_edi) VALUES ('$cep','$numero','$dataconstrucao','$datavistoria','$complemento','$nome')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Edificio cadastrado com sucesso!');window.location.
            href='cadastros_menu.html'</script>";
          }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse edificio');window.location
            .href='cadastroedificio.php'</script>";
          }

    }
  }
  else{

  }


?>