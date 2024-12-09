<?php
   $conexao = mysqli_connect("localhost", "root", "", "comidas", 3316); // O loguin, senha, nome da base e a porta
  // $conexao = mysqli_connect("localhost", "root", "");
if ($conexao) {
   $db = mysqli_select_db($conexao, "comidas"); 

}
?>

