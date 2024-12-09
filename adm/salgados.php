<?php
include 'conexao.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $mensagem_whatsapp = $_POST['mensagem_whatsapp']; 

    $diretorio_imagem = '../img/salgados/';

    $imagem = $_FILES['imagem']['name'];
    $caminho_imagem = $diretorio_imagem . basename($imagem);

    $extensao = strtolower(pathinfo($caminho_imagem, PATHINFO_EXTENSION));

    // Extensões permitidas: jpg, jpeg, png
    $extensoes_permitidas = array('jpg', 'jpeg', 'png');

    if (in_array($extensao, $extensoes_permitidas)) {
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_imagem)) {
            $sql = "INSERT INTO salgados (nome, preco, quantidade, imagem, mensagem_whatsapp) 
                    VALUES ('$nome', '$preco', '$quantidade', '$caminho_imagem', '$mensagem_whatsapp')";
            if ($conexao->query($sql) === TRUE) {
                // echo "Produto adicionado com sucesso!";
                echo "<script type='text/javascript'>
                alert('Produto adicionado com sucesso!');
                window.location.href = 'adicionar-salgados.html'; 
              </script>";
            } else {
                echo "Erro: " . $sql . "<br>" . $conexao->error;
            }
        } else {
            // echo "Erro no upload da imagem.";
            echo "<script type='text/javascript'>
            alert('Erro no upload da imagem.');
            window.location.href = 'adicionar-salgados.html'; 
          </script>";
        }
    } else {
        // echo "Apenas arquivos JPG, JPEG e PNG são permitidos.";
        echo "<script type='text/javascript'>
        alert('Apenas arquivos JPG, JPEG e PNG são permitidos.');
        window.location.href = 'adicionar-salgados.html'; 
      </script>";
    }
}
?>
