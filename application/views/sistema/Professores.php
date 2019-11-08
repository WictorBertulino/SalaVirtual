
<!DOCTYPE html>
<html lang="pt-br">



<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="/index.php/Home" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?=base_url()?>/assets/img/logo-small.png">
          </div>
        </a>
        <a href="/index.php/Home" class="simple-text logo-normal">
         Sala Virtual
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <?php $this->load->view('sistema/includes/menu') ?>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
         
          
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
            
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nc-icon nc-settings-gear-65"></i>
                <?=$this->session->userdata('nameUserSession');?>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="http://genius3.ddns.net/SalaVirtual">Sair</a>
                  
                </div>
              </li>
          
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
        <div class="w-100">
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalCadastroCliente">Adicionar Professor</button>

        </div>
        <br>
        <br>
        <br>
        
     <div class="row">
     <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Professores</h4>
              </div>
              <div class="card-body">
              <?php if ($this->session->flashdata("NovoProfessorSucesso")) { ?>
              <div class="alert alert-success " style="width:50%" role="alert">
                  Cadastrado com sucesso
              </div>
              <?php }?>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nome
                      </th>
                      <th>
                        Email
                      </th>
                    
                      <th >
                        Matéria
                      </th>
                      <th>
                        Conteúdos
                      </th>
                      <th>
                        Editar Acesso
                      </th>

                    </thead>
                    <tbody>
                      {professores}
                      <tr>
                        <td>{nome}</td>
                        <td>{usuario}</td>
                        <td>{materia}</td>
                        <td><button class="btn btn-primary">Ver Conteúdos</button></td>
                        <td><button class="btn btn-success">Editar Acesso</button></td>
                        
                       
                      {/professores}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
      </div>








      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
          
            <div class="credits ml-auto">
              <span class="copyright">
                © Desenvolvido por G3nius
             
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <div class="modal fade" id="ModalCadastroCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Professor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="Professores/NovoProfessor">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome Completo</label>
      <input type="text" class="form-control" required  name="nome" placeholder="Nome Completo">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Matéria</label>
      <input type="text" class="form-control"  required name="materia" placeholder="Matéria">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email de acesso</label>
    <input type="email" class="form-control" required name="usuario" placeholder="Email de Acesso">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Senha de acesso</label>
    <input type="password" class="form-control" required  name="senha" placeholder="Senha de Acesso">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</body>

</html>
