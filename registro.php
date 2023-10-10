<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="./assets/css/style.css">
	<title>
		Registro
	</title>
</head>

<body>
	<div id="container" class="container">
		<!-- FORM SECTION -->
	<form action="./assets/php/inserir.php" method="POST" >
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" id="nome" name="nome" placeholder="Nome" require>
						</div>
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="number" id="cpf" name="cpf" placeholder="150.834.756-32" require>
						</div>
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="number" id="telefone" name="telefone" placeholder="47988435234" require>
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" id="email" name="email" placeholder="Email" require>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" id="senha" name="senha" placeholder="Senha" require>
						</div>
						<button>
							ENVIAR
						</button>
					</div>
				</div>
			</div>
			<!-- END SIGN UP -->
			
		</div>
	</form>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img img-mx sign-up">
					<img src="./assets/imgs/bomblg.png" alt="welcome">
				</div>
				<div class="text sign-up">
					<h2>
						REGISTRO NOAR
					</h2>
					<p id="txt">
						A coragem é a força que nos impulsiona a enfrentar o desconhecido, a superar nossos medos e a persistir diante dos desafios. É o combustível da determinação que nos permite alcançar o impossível.
					</p>
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>

	<script src="./assets/js/registro.js"></script>
</body>

</html>