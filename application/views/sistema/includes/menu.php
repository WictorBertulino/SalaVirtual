<ul class="nav">
          <li>
            <a href="Home">
              <i class="nc-icon nc-bank"></i>
              <p>Home</p>
            </a>
          </li>


          <?php if($this->session->userdata('TypeSession') === 3){
            
            ?>
          <li>
            <a href="Professores">
              <i class="nc-icon nc-circle-10 "></i>
              <p>Professores</p>
            </a>
          </li>
          <li>
            <a href="Alunos">
              <i class="nc-icon nc-circle-10 "></i>
              <p>Alunos</p>
            </a>
          </li>

          <?php 
          }
            ?>

          <li>
            <a href="Conteudos">
              <i class="nc-icon nc-ruler-pencil"></i>
              <p>Conteúdos</p>
            </a>
          </li>



        
        </ul>