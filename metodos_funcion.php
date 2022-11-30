<?php
include("conexao.php");

function listaapart(){
      include("conexao.php");

      $query = "SELECT * FROM apartamento"; 
      $result_query = mysqli_query($conn, $query);
      
      echo "<table>";
      # Exibe os registros na tela 
      while ($row = mysqli_fetch_array( $result_query ))
      { 
            echo "<tr>";
            print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2]. "<td>" . $row[3]. "<td>" . $row[4]. "<td>" . $row[5];
            echo "</tr>";
      }          
      echo "</table>";

      //mysqli_close($conn);
    
}

function listaedif(){
      include("conexao.php");

      $query = "SELECT * FROM edificio"; 
      $result_query = mysqli_query($conn, $query);
      
      echo "<table>";
      # Exibe os registros na tela 
      while ($row = mysqli_fetch_array( $result_query ))
      { 
            echo "<tr>";
            print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2]. "<td>" . $row[3]. "<td>" . $row[4]. "<td>" . $row[5];
            echo "</tr>";
      }          
      echo "</table>";

      //mysqli_close($conn);
    
}

function listamorad(){
      include("conexao.php");

      $query = "SELECT * FROM morador"; 
      $result_query = mysqli_query($conn, $query);
      
      echo "<table>";
      # Exibe os registros na tela 
      while ($row = mysqli_fetch_array( $result_query ))
      { 
            echo "<tr>";
            print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2]. "<td>" . $row[3]. "<td>" . $row[4]. "<td>" . $row[5];
            echo "</tr>";
      }          
      echo "</table>";

      //mysqli_close($conn);
    
}

function insertedificio($nome,$cep,$numero,$complemento,$datavistoria,$dataconstrucao){

   $query = "INSERT INTO edificio (nome, cep, numero, complemento, datavistoria, dataconstrucao) VALUES ('$nome','$cep','$numero','$complemento','$datavistoria','$dataconstrucao')";
   $insert = mysqli_query($conn, $query);

   if($insert){
       echo"<script language='javascript' type='text/javascript'>
       alert('Edificio cadastrado com sucesso!');window.location.
       href='index.html'</script>";
     }else{
       echo"<script language='javascript' type='text/javascript'>
       alert('Não foi possível cadastrar esse edificio');window.location
       .href='cadastroedificio.html'</script>";
     }
}

?>