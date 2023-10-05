<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	<title>
		Login NOAR
	</title>
</head>

<body>
	<div id="container" class="container">
		<!-- FORM SECTION -->
	<form action="entrar.php" method="POST" >
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="Email" name="email" id="email" placeholder="Email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="senha" id="senha" placeholder="Senha">
						</div>
						<button>
							Entrar
						</button>
					</div>
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
	</form>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Bem-vindo ao portal de login do NOAR
					</h2>
					<p>
						A coragem é a força que nos impulsiona a enfrentar o desconhecido, a superar nossos medos e a persistir diante dos desafios. É o combustível da determinação que nos permite alcançar o impossível. Quando abraçamos a coragem, descobrimos que somos capazes de conquistar montanhas, vencer obstáculos e trilhar caminhos que nunca pensamos serem possíveis.
					</p>
				</div>
				<div class="img img-m sign-in">
					<img src="bomb.png" alt="welcome">
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>

	<script src="login.js"></script>
</body>

</html>