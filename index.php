<!DOCTYPE html>
<html>
<head>
	<title>Login Facebook</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8" />
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>Facebook</h2>
			</div><!--logo-->

			<form method="post" class="form-login">

				<div class="form-element">
					<p>E-mail ou Telefone:</p>
					<input type="email" required />
				</div><!--form-element-->
				
				<div class="form-element">
					<p>Senha:</p>
					<input type="password" required />
				</div><!--form-element-->

				<div class="form-element">
					<input type="submit" name="acao" value="Enviar" />
				</div><!--form-element-->

			</form><!--form-login-->
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-people">
				<img src="images/people.png" />
			</div><!--img-people-->

			<div class="open-account">

				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será!</h3>

				<form class="create-account">

					<div class="w50">
						<input placeholder="Nome" type="text" required/>
					</div><!--w50-->

					<div class="w50">
						<input placeholder="Sobrenome" type="text" required=/>
					</div><!--w50-->
					
					<div class="w100">
						<input placeholder="E-mail" type="email" required/>
					</div><!--w100-->

					<div class="w100">
						<input placeholder="Senha" type="password" required/>
					</div><!--w100-->

					<div class="w100">
						<h2>Data de Nascimento:</h2>
						<select name="nascimento-dia" class="nascimento">
							<?php
								for ($i= 1; $i <= 31; $i++) { 
								
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>

						<select name="nascimento-mes" class="nascimento">
							<option value="0">Janeiro</option>
							<option value="1">Fevereiro</option>
							<option value="2">Março</option>
							<option value="3">Abril</option>
							<option value="4">Maio</option>
							<option value="5">Junho</option>
							<option value="6">Julho</option>
							<option value="7">Agosto</option>
							<option value="8">Setembro</option>
							<option value="9">Outubro</option>
							<option value="10">Novembro</option>
							<option value="11">Dezembro</option>
						</select>

						<select name="nascimento-ano" class="nascimento">
							<?php
								for ($i= 1945; $i <= 2018; $i++) { 
								
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">

						<div class="input-radio">
							<input type="radio" name="sexo" value="masculino">
							<h2>Masculino</h2>
						</div><!--input-radio-->

						<div class="input-radio">
							<input type="radio" name="sexo" value="feminino">
							<h2>Feminino</h2>
						</div><!--input-radio-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<input type="submit" name="acao" value="Cadastre-se">
					</div>
 
					<div class="clear"></div>

				</form><!--create-account-->
			</div><!--open-account-->

			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

	<section class="linguas">

		<div class="center">
			
			<a class="selected-lingua" href="#">Português (BR)</a>
			<a class="" href="#">English (US)</a>
			<a class="" href="#">Español</a>
			<a class="" href="#">Français (France)</a>
			<a class="" href="#">Italiano</a>
			<a class="" href="#">العربية </a>
			<a class="" href="#">Deutsch</a>
			<a class="" href="#">हिन्दी</a>
			<a class="" href="#">中文(简体)</a>
			<a class="" href="#">日本語</a>

		</div><!--center-->

		<div style="border: 0;padding-top: 20px;" class="center">
			
			<a class="" href="#">Cadastre-se</a>
			<a class="" href="#">Entrar</a>
			<a class="" href="#">Messenger</a>
			<a class="" href="#">Facebook Lite</a>
			<a class="" href="#">Watch</a>
			<a class="" href="#">Pessoas</a>
			<a class="" href="#">Páginas</a>
			<a class="" href="#">Categorias de Página</a>
			<a class="" href="#">Locais</a>
			<a class="" href="#">Jogos</a>
			<a class="" href="#">Locais</a>
			<a class="" href="#">Marketplace</a>
			<a class="" href="#">Facebook Pay</a>
			<a class="" href="#">Grupos</a>
			<a class="" href="#">Instagram</a>
			<a class="" href="#">Desenvolvedores</a>
			<a class="" href="#">Criar anúncio</a>
			<a class="" href="#">Sobre</a>

		</div><!--center-->
	</section><!--linguas-->

</body>
</html>