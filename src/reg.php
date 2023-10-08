<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RouteUP</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/reg.css">
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
					Регистрация
				</h1>
				<p class="text-f-w-2">
					Зарегистрируйтесь перед тем, как начнете свое путешествие.
				</p>
				<div class="main-auth-reg-form display-flex">
					<div class="auth-form">
						<form action="check.php" method="post">
							<input type="email" name="email" class="input-style" placeholder="Электронная почта">
							<input type="password" name="pass" class="input-style" id="passwordInput" placeholder="Пароль">
							<div class="display-flex">
								<img src="./assets/hide.svg" alt="" class="hide-icon-style" onclick="togglePassword()">
							</div>
							<input type="password" name="pass" class="input-style" id="confirmPasswordInput" placeholder="Потвердите пароль">
							<p id="message1" style="margin-left: 65px; color: red;"></p>
							<p id="message2" style="margin-left: 65px; color: red;"></p>
							<p id="message3" style="margin-left: 65px; color: red;"></p>
							<p id="message4" style="margin-left: 65px;"></p>
							<button class="btn-submit-reg" onclick="checkPassword()"><p class="submit-auth-text">Регистрация</p></button>
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

	    function checkPassword(){
		    var passwordInput = document.getElementById("passwordInput");
		    var confirmPasswordInput = document.getElementById("confirmPasswordInput");
	        var password = passwordInput.value;
	        var messageElement1 = document.getElementById("message1");
	        var messageElement2 = document.getElementById("message2");
	        var messageElement3 = document.getElementById("message3");
	        var messageElement4 = document.getElementById("message4");

		    if (passwordInput.value !== confirmPasswordInput.value) {
		        messageElement1.textContent = "Пароли не совпадают!";
		        return;
		    }
		    if (password.length < 6 || password.length > 32) {
		        messageElement2.textContent = "Пароль должен быть от 6 до 32 символов!";
		        return;
		    }

		    if (!/[A-Z]/.test(password) || !/[a-z]/.test(password) || !/[0-9]/.test(password)) {
		        messageElement3.textContent = "Пароль должен содержать как минимум одну букву верхнего регистра, одну букву нижнего регистра и одну цифру!";
		        return;
		    }		   

		    // Дополнительные проверки пароля, например, на длину и сложность, могут быть добавлены здесь

		    // Если все проверки пройдены, выполните действия регистрации
		    // Например, отправьте данные на сервер или сохраните их в базе данных

	    	setTimeout(function(){
	    		window.location.href = "auth.php";
	    	}, 1000);

		    messageElement1.textContent = " ";
		    messageElement2.textContent = " ";
		    messageElement3.textContent = " ";
		    messageElement4.textContent = "Регистрация успешно завершена!";
		}



	</script>

</html>