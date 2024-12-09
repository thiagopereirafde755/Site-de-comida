<?php
require ('../conexao.php'); 

$search = isset($_GET['search']) ? mysqli_real_escape_string($conexao, $_GET['search']) : '';

if ($search != '') {
    $sql = "SELECT * FROM salgados WHERE nome LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM salgados";
}

$result = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../img/logo-1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados de Salgados</title>
    <link rel="stylesheet" href="../../css/pesquisa.css">
    <link rel="stylesheet" href="../../css/header1.css">
    <link rel="stylesheet" href="../../css/tables.css">
    <link rel="stylesheet" href="../../css/modal-atualizar.css">
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        footer {

bottom: 10px;
text-align: center;
width: 100%;
font-size: 17px;
background-color: #f5f5dc;
color: #000000;
}
    </style>
    <div class="header">
        <a href="../adm.html" style="position: absolute; top: 10px; left: 10px;">
            <img src="../../img/voltar.png" alt="Voltar" class="volta-icon">
        </a>
        <form method="GET" action="" class="search-form">
            <input type="text" name="search" id="search" class="search-input" placeholder="Pesquisar por Nome" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <button type="submit" class="search-button">
                <img src="../../img/search-icon.png" alt="Buscar" class="search-icon">
            </button>
        </form>
    </div>
    <br><br>
    <h2 style="text-align: center; justify-content: center;">Dados da Tabela de Salgados</h2>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Mensagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["nome"] . "</td>
                            <td>" . $row["preco"] . "</td>
                            <td>" . $row["quantidade"] . "</td>
                            <td>" . $row["mensagem_whatsapp"] . "</td>
                            <td>
                                <a href='#' class='update-btn' data-id='" . $row['id'] . "' data-nome='" . $row['nome'] . "' data-preco='" . $row['preco'] . "' data-quantidade='" . $row['quantidade'] . "' data-imagem='" . $row['imagem'] . "' data-mensagem='" . $row['mensagem_whatsapp'] . "'>
                                    <img src='../../img/atualizar.png' alt='Atualizar' style='width: 50px; height: 30px; vertical-align: middle;'>
                                </a>
                                <a href='deletar/deletar-salgados.php?id=" . $row["id"] . "'>
                                    <img src='../../img/excluir.png' alt='Excluir' style='width: 50px; height: 30px; vertical-align: middle;'>
                                </a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Nenhum dado encontrado</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <div id="updateModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Atualizar Salgado</h2>
        <form id="updateForm" action="atualizar/atualizar-salgado.php" method="POST">
            <input type="hidden" name="id" id="id">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br><br>

            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="preco" required required pattern="^\d+(\.\d{1,2})?$"title="Apenas numero e ponto"><br><br>

            <label for="quantidade">Quantidade:</label>
            <input type="text" name="quantidade" id="quantidade" required><br><br>

            <label for="mensagem">Mensagem:</label>
            <input type="text" name="mensagem" id="mensagem"><br><br>

            <button type="submit" class="modal-link">Atualizar</button>
        </form>
    </div>
</div>
<br>
    <footer>
        <p>Desenvolvido por:<a href="https://www.instagram.com/thiagopereira_.7/" target="_blank"> Thiago Pereira</p></a>  
      </footer>
<script src="../../js/atualizar1.js"></script>

</body>
</html>
