<?php

function codedival($codedi){
    include("conexao.php");
    $query_1 = "SELECT * FROM edificio WHERE codigo_edificio = $codedi";
    $select = mysqli_query($conn, $query_1);
    if($select){
        echo"<script language='javascript' type='text/javascript'>
        alert('codigo do edificio já existe');window.location.
        href='cadastroapart.php'</script>";
        return TRUE;
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('codigo do edificio não existe');window.location
          .href='cadastroapart.php'</script>";
          return FALSE;
        }
}

function codmoval($codedi){
    include("conexao.php");
    $query_2 = "SELECT * FROM morador WHERE codigo_morador = $codmo";
    $select = mysqli_query($conn, $query_2);
    if($select){
        echo"<script language='javascript' type='text/javascript'>
        alert('codigo do morador não existe');window.location.
        href='cadastroapart.php'</script>";
        return TRUE;
        }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('codigo do morador existe');window.location
        .href='cadastroapart.php'</script>";
        return FALSE;
        }
}
?>