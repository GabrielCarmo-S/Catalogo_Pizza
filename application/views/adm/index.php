<!DO<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Home Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="<?php echo base_url("public/css/adm.css"); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
  <div class="wrapper">
    <div class="top_navbar">
      <div class="cogs">
        <i class="fas fa-cogs"></i>
      </div>
      <div class="top_menu">
        <div class="logo">Perien</div>
        <ul>
          <li>
            <a href="#"><i class="fas fa-bell"></i></a>
          </li>
          <li>
            <a href="#" id="user" data-toggle="dropdown"><i class="fas fa-user"></i></a>
            <div class="dropdown-menu d_i" aria-labelledby="user">
              <span class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-900"></i>Perfil</span>
              <div class="dropdown-divider"></div>
              <span class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900"></i>Sair</span>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="sidebar">
      <ul>
        <li>
          <a href="#" data-toggle="tooltip"  data-placement="right" title="Editar Cardapio"><span class="icon"><i class="fas fa-pizza-slice"></i></span></a>
        </li>
        <li><a href="#" data-toggle="tooltip"  data-placement="right" title="Editar Noticias"><span class="icon"><i class="fas fa-blog"></i></span></a>
        </li>
        <li><a href="#" data-toggle="tooltip"  data-placement="right" title="Editar Testemunhos"><span class="icon"><i class="fas fa-users"></i></span></a>
        </li>
      </ul>
    </div>
  </div>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Clique em  "Sair" para encerrar a sessão.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="<?php echo base_url('login/logout') ?>">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url("public/js/adm.js"); ?>"></script>
  
</body>
</html>