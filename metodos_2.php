<?php

// Create connection
include("conexao.php");

# Seleciona o banco de dados 
//mysqli_select_db( $database ) or die( 'Erro na seleção do banco' );

# Executa a query desejada 
$query = "SELECT * FROM apartamento"; 
$result_query = mysqli_query( $conn, $query ) or die(' Erro na query:' . $query . ' ' . mysqli_error() );

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query ))
{ 
      echo "<br>";
      print $row[0] . " | " . $row[1] . " | " . $row[2]. " | " . $row[3]. " | " . $row[4]. " | " . $row[5];
}

/*$consult = "INSERT INTO edificio" (name, lastname, email) VALUES ('Test', 'Testing', 'Testing@tesing.com');
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
*/
?>