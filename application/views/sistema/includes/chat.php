<button class="open-button" onclick="openForm()">Discussão</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>
    <ul>
      <li>Wictor : Olá mundo</li>
      <li>João : Olá tudo bem</li>

    </ul>
    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Digite sua mensagem" id="msg" name="msg" required></textarea>

    <button type="submit" class="btn">Enviar Mensagem</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>
  </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.dev.js" integrity="sha256-OgiHfllOBEOiWQ2OcBsDncRG2k7QBW9Rs1dB7MH2N2s=" crossorigin="anonymous"></script>
<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

  let socket = io('http://localhost:3000')


  function enviarData() {
    let obj = {
      Nome: "João Wictor",
      Message:document.getElementById("id").value
    }
    socket.emit('sendMessage', obj);
  }
</script>