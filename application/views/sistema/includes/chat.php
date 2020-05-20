<button class="open-button" onclick="openForm()">Discussão</button>

<div class="chat-popup" id="myForm">
  <form  class="form-container" onsubmit="enviarData()">
    <h1>Chat</h1>
    <input style="display: none" id="name" value="<?=$this->session->userdata('nameUserSession')?>">
    <ul id="listMessage">

      

    </ul>
    <label for="msg"><b>Message</b></label>
    <input placeholder="Digite sua mensagem" id="msg" name="msg" required></input>

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


  function enviarData(event) {
    event.preventDefault();
    let obj = {
      Nome: document.getElementById("name").value,
      Message:document.getElementById("msg").value
    }
    socket.emit('sendMessage', obj);
    document.getElementById("msg").value = ""
  }

  socket.on('teste', function(data){
    
    document.getElementById("listMessage").innerHTML += "<li>"+data.Nome+" : "+data.Message;  

  })
</script>