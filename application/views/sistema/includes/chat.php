
<button class="open-button" onclick="openForm()">Discussão</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>
    <ul >
      <li>Wictor : Olá mundo</li>
      <li>João : Olá tudo bem</li>
      
    </ul>
    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Digite sua mensagem" name="msg" required></textarea>

    <button type="submit" class="btn">Enviar Mensagem</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>