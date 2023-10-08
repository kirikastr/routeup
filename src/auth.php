<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RouteUP</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/auth.css">
</head>
<body>

	<main class="main">
		<div class="authcont">
			<div class="nav">
				<div class="leave">
					<a href="index.php" class="nav-logo-link">
						<img src="./assets/leave-bt.svg" alt="" class="nav-logo-pik">
					</a>
				</div>

				<div class="display-flex">
					<button class="btn-text-auth" onclick="window.location.href = 'auth.php'">Вход</button>
				</div>

				<div class="display-flex">
					<button class="btn-text-reg" onclick="window.location.href = 'reg.php'">Регистрация</button>
				</div>

			</div>

			<div class="bottom">
				<h1 class="text-f-w">
					Вход
				</h1>
				<p class="text-f-w-2">
					Прежде чем отправиться в путешествие, убедитесь, что вы зарегистрированы.
				</p>
				<div class="main-auth-reg-form display-flex">
					<div class="auth-form">
						<form action="auth-bd.php" method="post">
							<input type="email" name="email" class="input-style" placeholder="Электронная почта">
							<input type="password" name="pass" class="input-style" id="passwordInput" placeholder="Пароль">
							<div class="display-flex">
								<img src="./assets/hide.svg" alt="" class="hide-icon-style" onclick="togglePassword()">
							</div>
							<div style="width: 8px; height: 8px;"></div>
							<a href="#" class="forgot-y-pass-l">Забыли пароль?</a>
							<div class="save-me display-flex">
								<input type="checkbox" name="remember" class="save-me-box-style"><p class="save-me-text">Запомнить меня</p>
							</div>
							<button class="btn-submit-auth"><p class="submit-auth-text">Войти</p></button>
						</form>
					</div>
					<div class="g-f-v-auth">
						<button class="auth-btn display-flex">
							<img src="./assets/google.svg" alt="" class="logo-auth">
							<p class="continue-with-text">Продолжить с Google</p>
						</button>
						<button class="auth-btn display-flex">
							<img src="./assets/fb.svg" alt="" class="logo-auth">
							<p class="continue-with-text">Продолжить с Facebook</p>
						</button>
						<button class="auth-btn display-flex">
							<img src="./assets/vk.svg" alt="" class="logo-auth">
							<p class="continue-with-text">Продолжить с VK</p>
						</button>
					</div>
				</div>
				<p class="agreement-text">Выполняя вход, вы соглашаетесь с нашими Условиями, вы подтверждаете, что мы используем технологии отслеживания файлов cookie, чтобы лучше обслуживать вас, и вы прочитали нашу Политику конфиденциальности.</p>
			</div>
		</div>
	</main>



</body>

	<script>
		  function togglePassword() {
		    var passwordInput = document.getElementById("passwordInput");
		    if (passwordInput.type === "password") {
		      passwordInput.type = "text";
		    } else {
		      passwordInput.type = "password";
		    }
		  }
	</script>

</html>