<?php
require ('../../conexao.php'); 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM salgados WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        // echo "Produto excluído com sucesso!";
        // header("Location: salgados.php"); 
        echo "<script type='text/javascript'>
        alert('Produto excluído com sucesso!');
        window.location.href = '../salgados.php'; 
      </script>";
        exit; 
    } else {
        echo "Erro: " . mysqli_error($conexao); 
    }
}

mysqli_close($conexao);
?>
