
<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url("public/css/style2.css"); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Perien - Login</title>
  </head>

  <body>


  <div class="jumbotron jumbotron-fluid login mb-0">
    <div class="container login-conteudo">

        <?php if ($message = $this->session->flashdata('error')): ?>
                 <div class="row">
                    <div>
                      <div class="msg alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle">&nbsp;&nbsp;</i><?php echo $message; ?></strong>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>

                <?php if ($message = $this->session->flashdata('info')): ?>
                 <div class="row">
                    <div>
                      <div class="msg2 alert-info alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle">&nbsp;&nbsp;</i><?php echo $message; ?></strong>
                      </div>
                    </div>
                  </div>
              <?php endif; ?>


      <h1 class="text-center mt-3">Login</h1>
      <form class="login-form mt-3 text-center" name="form_auth" method="POST" action="<?php echo base_url('login/auth'); ?>">

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control input_user text-center" value="" placeholder="Seu email">
        </div>

        <div class="input-group">
          <input type="password" id="password" name="password" class="form-control input_pass text-center" placeholder="Sua senha"  >
        </div>

        <div class="d-flex justify-content-center mt-3 login_container">

          <input type="submit" class="login_btn">

        </div>

        <a class="forgot text-muted mt-5" href="#">Esqueceu sua senha?</a>

        <div class="social-media mb-3 mt-3 ml-5">
          <div class="button-media">
            <i class="fab fa-facebook"></i>
          </div>
          <div class="button-media">
            <i class="fab fa-google"></i>
          </div>
        </div>  

      </form>
    </div>
  </div>  



  <div class="jumbotron jumbotron-fluid rodape">
    <ul class="lista-rodape">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-home"></i>Home</a>
      </li>  
          <li class="nav-item">
             <a class="nav-link" href="#"><i class="fas fa-question-circle"></i>Sobre nós</a>
          </li>
          <li class="nav-item">
              <a class="nav-link"type="button" data-toggle="modal" data-target="#contact"><i class="fas fa-envelope"></i>Contato</a>
          </li>
    </ul>
    <div class="social-media mb-3">
      <div class="button-media">
        <i class="fab fa-facebook"></i>
      
      </div>
      <div class="button-media">
        <i class="fab fa-instagram"></i>
        
      </div>
      <div class="button-media">
        <i class="fab fa-twitter"></i>
      </div>
      <div class="button-media">
        <i class="fab fa-github"></i>
        
      </div>  
    </div>  
    <p class="copyrights">&copy; 2020 Gabriel Carmo</p>
  </div>

    <div class="overlay"></div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

  </body>
</html>


