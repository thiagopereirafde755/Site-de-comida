 var modal = document.getElementById("updateModal");
 var btns = document.querySelectorAll(".update-btn"); 
 var span = document.getElementsByClassName("close")[0]; 
 btns.forEach(function(btn) {
     btn.onclick = function() {
         var id = this.getAttribute('data-id');
         var nome = this.getAttribute('data-nome');
         var preco = this.getAttribute('data-preco');
         var quantidade = this.getAttribute('data-quantidade');
         var mensagem = this.getAttribute('data-mensagem'); 
         document.getElementById("id").value = id;
         document.getElementById("nome").value = nome;
         document.getElementById("preco").value = preco;
         document.getElementById("quantidade").value = quantidade;
         document.getElementById("mensagem").value = mensagem; 
         modal.style.display = "block";
     }
 }); 
 span.onclick = function() {
     modal.style.display = "none";
 }
  window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }
 