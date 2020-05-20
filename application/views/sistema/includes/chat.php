
<div class="container text-center">
	<div class="row">
		<h2>Open in chat (popup-box chat-popup)</h2>
        <h4>Click Here</h4>
        <div class="round hollow text-center">
        <a href="#" id="addClass"><span class="glyphicon glyphicon-comment"></span> Open in chat </a>
        </div>
        
        <hr>
        
        MORE :
        <a target="_blank" href="http://bootsnipp.com/snippets/33ejn">Whatsapp Chat Box POPUP</a>,
         <a target="_blank" href="http://bootsnipp.com/snippets/z4P39"> Creative User Profile  </a>
         
	</div>
</div>


<div class="popup-box chat-popup" id="qnimate">
    		  <div class="popup-head">
				<div class="popup-head-left pull-left"><img src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" alt="iamgurdeeposahan"> Gurdeep Osahan</div>
					  <div class="popup-head-right pull-right">
						<div class="btn-group">
    								  <button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
									   <i class="glyphicon glyphicon-cog"></i> </button>
									  <ul role="menu" class="dropdown-menu pull-right">
										<li><a href="#">Media</a></li>
										<li><a href="#">Block</a></li>
										<li><a href="#">Clear Chat</a></li>
										<li><a href="#">Email Chat</a></li>
									  </ul>
						</div>
						
						<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
                      </div>
			  </div>
			<div class="popup-messages">
    		
			
			
			
			<div class="direct-chat-messages">
                    
					
					<div class="chat-box-single-line">
								<abbr class="timestamp">October 8th, 2015</abbr>
					</div>
					
					
					<!-- Message. Default to the left -->
                    <div class="direct-chat-msg doted-border">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Osahan</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img alt="message user image" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Hey bro, how’s everything going ?
                      </div>
					  <div class="direct-chat-info clearfix">
                        <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                      </div>
						<div class="direct-chat-info clearfix">
						<span class="direct-chat-img-reply-small pull-left">
							
						</span>
						<span class="direct-chat-reply-name">Singh</span>
						</div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
					
					
					<div class="chat-box-single-line">
						<abbr class="timestamp">October 9th, 2015</abbr>
					</div>
			
					
					
					<!-- Message. Default to the left -->
                    <div class="direct-chat-msg doted-border">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Osahan</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img alt="iamgurdeeposahan" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Hey bro, how’s everything going ?
                      </div>
					  <div class="direct-chat-info clearfix">
                        <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                      </div>
						<div class="direct-chat-info clearfix">
						  <img alt="iamgurdeeposahan" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img big-round">
						<span class="direct-chat-reply-name">Singh</span>
						</div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
					
					
                    

                    

                  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.dev.js"></script>
<script>
    $(function(){
$("#addClass").click(function () {
          $('#qnimate').addClass('popup-box-on');
            });
          
            $("#removeClass").click(function () {
          $('#qnimate').removeClass('popup-box-on');
            });
  })
  let socket = io('http://localhost:3000')


  function enviarData(){
  let obj = {Nome:"João Wictor", Message:'Olá mundo'}
  socket.emit('sendMessage',obj);
  }
</script>