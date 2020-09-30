<!DO<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Responsive Side Navigation Bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="<?php echo base_url("public/css/style3.css"); ?>" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
    <i class="fas fa-cogs"></i>
    </div>
    <div class="top_menu">
      <div class="logo">Perien</div>
      <ul>
        <li>
          <a href="#"><i class="fas fa-bell"></i></a>
        </li>
        <li>
          <a href="#" id="user"><i class="fas fa-user"></i></a>
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



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url("public/js/adm.js"); ?>"></script>
  
</body>
</html>