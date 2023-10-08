<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RouteUP - редактирование профиля</title>
	<link rel="stylesheet" href="./css/output.css">
	<link rel="stylesheet" href="./css/redactor.css">
</head>
<body>
	<div style="display: flex;">
		<div class="relative w-[89px] bg-[#1675CA] pt-4" style="height: 115vh;">
			<!-- top -->
			<a href="index-profile.php"><img src="./assets/logo.svg" class="w-[60px] mx-[15px]" alt=""></a>
			<hr class="w-[56px] mx-[17px] border-t-[3px] mt-6 opacity-25">
			<a href="index-profile.php"><img src="./assets/icon/home.svg" class="w-[40px] mx-[25px] mt-[22px]" alt=""></a>
			<a href="talk-profile.php"><img src="./assets/icon/speech.svg" class="w-[40px] mx-[25px] mt-[47px]" alt=""></a>
			<a href="profile.php"><img src="./assets/icon/people.svg" class="w-[40px] mx-[25px] mt-[47px]" alt=""></a>
			<a href="map-profile.php"><img src="./assets/icon/map.svg" class="w-[40px] mx-[25px] mt-[47px]" alt=""></a>
			<!-- bottom -->
			<section class="absolute bottom-0 pb-[31px]">
				<hr class="w-[56px] mx-[17px] border-t-[3px] mb-[23px] opacity-25">
				<a href="index-profile.php"><img src="./assets/icon/leave.svg" class="w-[40px] mx-[25px]" alt=""></a>
			</section>
		</div>
		<form action="profile.php" method="GET" style="display:flex;">	
			<div>
				<p class="t1">Редактирование профиля</p>	
				<p class="t2" style="margin-top: 74px;">Как вас зовут</p>
				<input class="input" type="text" name="name" placeholder="Имя">
				<div>
					<input class="input" type="text" name="lastname" placeholder="Фамилия">
				</div>

				<p class="t2" style="margin-top: 16px;">Расскажите о себе</p>			
				<input class="input" type="text" name="aboutme" placeholder="Обо мне">
				<p class="t2" style="margin-top: 16px;">Контакты</p>			
				<input class="input" type="tel" name="tel" placeholder="Номер телефона">
				<button type="submit">Готово</button>				
			</div>

			<div class="avatar-cont">
				<img src="./assets/avatar-not.jpg" class="avatar-style" alt="">
				<label for="file-upload" class="custom-file-upload">
					<div>
						<span>Изменить фото профиля</span>
				  		<input id="file-upload" type="file" name="logo">
					</div>
				</label>				
			</div>
		</form>		
	</div>
</body>
</html>