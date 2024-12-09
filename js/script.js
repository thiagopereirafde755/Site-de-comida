// var modal = document.getElementById("modal");
//var btn = document.getElementById("encomendeBtn");
//var closeBtn = document.querySelector(".close");
// btn.onclick = function() {
    // modal.style.display = "block";
// }
// closeBtn.onclick = function() {
    // modal.style.display = "none";
// }
// window.onclick = function(event) {
    // if (event.target == modal) {
        // modal.style.display = "none";
    // }
// }
   const imagens = [
            "img/mini-coxinha-de-frango.jpg", 
            "img/salgados/empada2.jpeg",
            "img/salgados/bolinhos-de-queijo-e-milho.jpg",
            "img/congeldos/pao-de-queijo-coquetel-massa-congelada.jpg",
            "img/salgados/espetinhodefrango.jpeg"
            
        ];
        let indice = 0;
        let imagemElement = document.getElementById('imagem');
        
        function trocarImagem() {
            imagemElement.classList.remove('visible'); 
            setTimeout(function() {
                indice = (indice + 1) % imagens.length; 
                imagemElement.src = imagens[indice]; 
                imagemElement.classList.add('visible'); 
            }, 1000); 
        }
    
        setInterval(trocarImagem, 1500); 
        