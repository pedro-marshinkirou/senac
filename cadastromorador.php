<?php

include("metodos_funcion.php");

?>

<html>

<head>
    <meta charset="UTF-8">
    <title> Cadastro de Edificios </title>
    <link href="estilo.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div id="logo"> 
        <h1 id="tituloLogo">cadastrar mrd</h1>
    </div>

    <?php
    listamorad()
    ?>

    <form method="POST">
        <label>Nome:</label><input type="text" name="nome" id="nome"><br>
        <label>CPF:</label><input type="text" name="CPF" id="CPF"><br>
        <label>CEP:</label><input type="text" name="cep" id="cep"><br>
        <label>Sexo:</label><input type="text" name="sexo" id="sexo"><br>
        <label>Data de Nascimento:</label><input type="text" name="data_nascimento" id="data_nascimento"><br>
        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    </form>    

</body>

</html>

<?php
if (isset($_POST["nome"])){
    $nomea = $_POST["nome"];
    $CPF = $_POST["CPF"];
    $cep = $_POST["cep"];
    $Sex = $_POST["sexo"];
    $datanasc = $_POST["data_nascimento"];
}

if(isset($nomea)){
    if($nomea == "" || $nomea == null)
    {
        echo "Nome não pode estar vazio!";
    }
    else
    {
        $query = "INSERT INTO morador (nome, CPF, cep, sexo, data_nascimento) VALUES ('$nomea','$CPF','$cep','$Sex','$datanasc')";
        $insert = mysqli_query($conn,$query);
        if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Morador cadastrado com sucesso!');window.location.
            href='cadastros_menu.html'</script>";
          }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse Morador');window.location
            .href='cadastroedificio.php'</script>";
          }
    }
  }
  else{
      
  }

?>