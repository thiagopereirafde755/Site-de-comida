<?php
require('../../conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = mysqli_real_escape_string($conexao, $_POST['id']);
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $preco = mysqli_real_escape_string($conexao, $_POST['preco']);
    $quantidade = mysqli_real_escape_string($conexao, $_POST['quantidade']);
    $mensagem = mysqli_real_escape_string($conexao, $_POST['mensagem']);

    $sql = "UPDATE congelados SET nome='$nome', preco='$preco', quantidade='$quantidade',  mensagem_whatsapp='$mensagem' WHERE id='$id'";

    if (mysqli_query($conexao, $sql)) {
        // header('Location: ../congelados.php');
        echo "<script type='text/javascript'>
        alert('Produto atualizado com sucesso!');
        window.location.href = ' ../congelados.php'; 
      </script>";
        exit();
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conexao);
    }
}
?>
