<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo-1.png">
    <title>Salgados</title>
    <link rel="stylesheet" href="../css/Comidas1.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>  

    <a href="../cardapio.html" style="position: absolute; top: 10px; left: 10px;">
        <img src="../img/voltar.png" alt="Voltar"  class="volta-icon">
    </a>
    <div class="h11">
        <h1 style="color: rgb(117, 19, 19);">
            SALGADOS
        </h1>
    </div>
    
    <div class="caixa">
    <?php
    include '../adm/conexao.php'; 
    
    $sql = "SELECT * FROM salgados";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='quadro-imagem'>";
            echo "<img class='img-clicavel' src='" . $row['imagem'] . "' alt='" . $row['nome'] . "' data-produto='" . strtolower(str_replace(' ', '-', $row['nome'])) . "' data-mensagem='" . htmlspecialchars($row['mensagem_whatsapp'], ENT_QUOTES) . "'>";
            echo"<br>";
            echo "<p><strong>" . $row['nome'] . " - R$" . number_format($row['preco'], 2, ',', '.') . " - " . $row['quantidade'] . "</strong></p>";
            echo "</div>";
        }
    } else {
        echo "<p>Nenhum produto encontrado.</p>";
    }
    $conexao->close();
    ?>
</div>

</div>

<footer id="contato" style="margin-top: 80px;">
        <div class="footer-rodape">
            <div class="footer-link">
            <h4>Contato</h4>
                <ul>Telefone: (00) 9 1234-5678</ul>
                <ul>Endereço: Rua Exemplo, 123 - Bairro, cidade - (ex), 00000-000</ul>
            </div>
            <div class="footer-link">
                <h4>Links Úteis</h4>
                <ul>
                    <li class="botao2"><a href="../index.html">Inicio</a></li>
                    <li class="botao2"><a href="../cardapio.html">Cardápio</a></li>
                    <li class="botao2"><a href="../sobre-nos.html">Sobre-nós</a></li>
                </ul>
            </div>
            <div class="footer-link">
                <h4>Redes Sociais</h4>
                <a href="#" target="_blank">
                    <img src="../img/instagram.png" alt="Instagram" class="instagram-icon">
                </a>
            </div>
        </div>
        <br>
        <strong>&copy;Desenvolvido por <a href="https://www.instagram.com/thiagopereira_.7/" target="_blank">Thiago Pereira</a></strong>
    </footer>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Entrar em contato:</h2>
            <a href="#" target="_blank" id="whatsapp-link" class="modal-link">WhatsApp</a>
            <a href="#" target="_blank" class="modal-link">Instagram</a>
        </div>
    </div>
    <script src="../js/salgado1.js"></script>
</body>
</html>
