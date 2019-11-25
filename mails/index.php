<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Document</title>
	<style>
		.contLogin{
			width:100%;
			height:100%;
			position:absolute;
			display:flex;
			justify-content:center;
			align-items:center;
		}
		.contLogin form{
			box-sizing:border-box;
			padding: 1.5em;
			box-shadow: 0em 0em 0.5em rgba(0,0,0,0.5);
			max-width: 400px;
			text-align:center;
			border-radius: 0.5em;
		}
		.contLogin form input{
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
<div class="contLogin">
			


			<form method="post" id="login-form" action="Controllers/controller-login.php">
				
				<div>
					<input type="text" name="user" placeholder="user" required>
				</div>
				<div>
					<input type="password" name="pass" placeholder="password" required>
				</div>
				<div>
					<button  class="btn btn-primary" id="btnLogin" name="loginIn" type="submit">Acceder</button>
				</div>


			</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>