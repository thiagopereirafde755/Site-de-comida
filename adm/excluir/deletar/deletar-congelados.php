<?php
require ('../../conexao.php'); 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM congelados WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        // echo "Produto excluído com sucesso!";
        // header("Location: congelados.php"); 
        echo "<script type='text/javascript'>
        alert('Produto excluído com sucesso!');
        window.location.href = '../congelados.php'; 
      </script>";
        exit; 
    } else {
        echo "Erro: " . mysqli_error($conexao); 
    }
}

mysqli_close($conexao);
?>
