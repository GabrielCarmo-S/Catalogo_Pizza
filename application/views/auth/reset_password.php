
<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo base_url("public/css/style5.css"); ?>" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<title>Perien - Login</title>
</head>

<body>

	<div class="login-color">
		<span  type="button" class="test" ><i class="fas fa-toggle-on" id="lc2"></i></span> 
		<span type="button" class="test"><i class="fas fa-toggle-off " id="lc1"> </i></span>
	</div>

	<div class="container login-conteudo">
		<div class="login-logo">
			<i class="fas fa-pizza-slice"></i>
		</div>

		<div class="login-logo2 text-center" >
			<i class="fas fa-pizza-slice"><h2>Pizzaria</h2></i>
		</div>

		<h3 class="text-center mt-2">Colocar nova senha</h3>

		<?php echo form_open('auth/reset_password/' . $code);?>

		<div class="input-group col-lg-12">
			<div class="container login-input">
				<span class="icon-login"><i class="fas fa-key"></i></span>
			</div>
			<input type="password" name="new" value id="new" class="form-control input-lg" placeholder="Sua nova senha" required minlength="8">

			<div class="container login-input2" >
				<span type="button" class="view-pass" id="v2"><i class="far fa-eye-slash"></i></span>
				<span type="button" class="view-pass" id="v1"><i class="fas fa-eye"></i></span>
			</div>
		</div>


		<div class="input-group col-lg-12 mt-3">
			<div class="container login-input" >
				<span class="icon-login"><i class="fas fa-key"></i></span>
			</div>
			<input type="password" name="new_confirm" value id="new_confirm" class="form-control input-lg input-login" placeholder="Confirme sua senha" required minlength="8">

			<div class="container login-input2">
				<span type="button" class="view-pass1" id="v4"><i class="far fa-eye-slash"></i></span>
				<span type="button" class="view-pass1" id="v3"><i class="fas fa-eye"></i></span>
			</div>
		</div>

		<?php echo form_input($user_id);?>
		<?php echo form_hidden($csrf); ?>

				<div class="text-center mt-3" id="infoMessage"><?php echo $message;?></div>


		<div class="d-flex justify-content-center login_container">

			<button type="submit" name="submit" value="Mudar" class="login_btn">Mudar</button>

		</div>

		<?php echo form_close();?>


		<div class="voltar-login text-center mt-3">
			<a id="nv" href="<?php echo base_url("login/index"); ?>"><i class="fas fa-long-arrow-alt-left"></i>Voltar Para Login</a>
		</div>
	</div>

</form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<script src="<?php echo base_url("public/js/login.js"); ?>"></script>

</body>
</html>









