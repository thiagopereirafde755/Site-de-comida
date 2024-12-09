var modal = document.getElementById("modal");
var closeBtn = document.querySelector(".close");
var whatsappLink = document.getElementById("whatsapp-link");
var imgsClicaveis = document.querySelectorAll(".img-clicavel");

imgsClicaveis.forEach(function(img) {
    img.onclick = function() {
        modal.style.display = "flex";
        var mensagem = img.getAttribute("data-mensagem"); 

        whatsappLink.href = "https://wa.me/aqui-vai-o-numero-de-telefone?text=" + encodeURIComponent(mensagem);
    };
});

closeBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
