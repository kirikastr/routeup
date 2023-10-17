<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RouteUP</title>
	<!-- Links -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&family=Inter:wght@300;400&family=Lato:wght@700&family=Montserrat:wght@500;600&family=Playfair+Display:wght@600&family=Poppins:wght@400;500;600;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="./css/output.css">
</head>

<body>
	<!-- Main banner and Header -->
	<section class="h-[1049px] pt-7" style="background-image: url('./assets/home-banner.svg'); background-size: 100%;">
		<header class="flex items-center gap-[136px] max-w-[1562px] mx-auto">
			<!-- Logo -->
			<a href="#">
				<span class="font-medium text-[40px] text-white">RouteUP</span>
			</a>

			<!-- Menu Desktop -->
			<nav>
				<ul class="flex items-center gap-[77px]">
					<li>
						<a href="weather.php"
							class="font-medium text-2xl text-white relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-white after:scale-0 hover:after:scale-100 after:transition-transform">Погода</a>
					</li>
					<li>
						<a href="map.php"
							class="font-medium text-2xl text-white relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-white after:scale-0 hover:after:scale-100 after:transition-transform">Карта</a>
					</li>
					<li>
						<a href="talk.php"
							class="font-medium text-2xl text-white relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-white after:scale-0 hover:after:scale-100 after:transition-transform">Сообщество</a>
					</li>
					<li>
						<a href=""
							class="font-medium text-2xl text-white relative after:absolute after:h-[1px] after:w-full after:left-0 after:-bottom-1 after:bg-white after:scale-0 hover:after:scale-100 after:transition-transform">Скачать
							приложение</a>
					</li>
				</ul>
			</nav>

			<!-- Actions -->
			<div class="flex items-center gap-[30px] " style="margin-left: 250px;">
				<a href="auth.php"
					class="text-white font-medium text-2xl leading-normal border-[3px] border-white py-2 px-9 bg-transparent">Войти</a>
			</div>
		</header>

		<!-- Main Words -->
		<section class="text-center mt-[142px]">
			<p class="font-playfair text-2xl text-white font-semibold">Веб-гид для путешествий</p>
			<h1 class="font-playfair text-9xl text-white font-normal -translate-y-[20px]">RouteUP</h1>
		</section>
	</section>
	<!-- Our offers -->
	<section>
		<div class="max-w-[1012px] mx-auto text-center">
			<p class="font-playfair text-[30px] text-slate-800 font-semibold">НАШИ ПРЕДЛОЖЕНИЯ</p>
			<h1 class="font-playfair text-[64px] font-semibold">Самые популярные развлечения</h1>
		</div>

		<div class="flex items-center mt-[123px] gap-[81px] justify-center">
			<div class="bg-[#F8F9FD] w-[539px] h-[673px] border border-black text-center">
				<h1 class="font-playfair text-[40px] font-semibold">Отдых у костра</h1>
				<p class="text-2xl font-semibold mt-[104px]">Смотреть далее</p>
				<img src="./assets/1-block.png" alt="" class="w-[438px] mt-[51px] mx-auto">
			</div>
			<div class="w-[539px] h-[673px] border border-black text-center">
				<h1 class="font-playfair text-[40px] font-semibold">Отдых у костра</h1>
				<p class="text-2xl font-semibold mt-[104px]">Смотреть далее</p>
				<img src="./assets/2-block.png" alt="" class="w-[438px] mt-[51px] mx-auto">
			</div>
			<div class="w-[539px] h-[673px] border border-black text-center">
				<h1 class="font-playfair text-[40px] font-semibold">Отдых у костра</h1>
				<p class="text-2xl font-semibold mt-[104px]">Смотреть далее</p>
				<img src="./assets/3-block.png" alt="" class="w-[438px] mt-[51px] mx-auto">
			</div>
		</div>
	</section>
	<!-- Take ready -->
	<div class="mt-[150px] h-[611px] grid grid-cols-2" style="background-image: url(./assets/banner-sunset.svg);">
		<div class="pt-[61px] pl-[70px]">
			<h1 class="w-[1025px] font-playfair text-[60px] font-semibold">Приготовьтесь к приключениям в реальном
				времени</h1>
			<p class="font-playfair mt-[26px] text-2xl font-normal w-[613px]">Однажды заразившись лихорадкой
				путешественника, вы
				не сможете
				от нее вылечиться и
				будете заражены ею
				до конца жизни.</p>
			<button class="bg-black py-[27px] px-[33px] text-white text-2xl font-bold mt-[75px] ml-[80px]">
				Смотреть далее
			</button>
		</div>
		<div>
			<img class="-translate-y-[60px] translate-x-[70px]" src="./assets/phone.png" alt="">
		</div>
	</div>
	<!-- Footer -->
	<footer class="h-[625px] pl-[107px] flex bg-[#04091D] mt-[242px] pt-[89px]">
		<div class="w-[444px] relative">
			<h1 class="text-white font-playfair text-[40px] font-semibold">О сайте</h1>
			<p class="text-[20px] text-white font-playfair font-semibold mt-[41px]">Мир стал настолько быстрым, что люди
				не хотят
				стоять, читая страницу информации, они скорее смотрят
				презентацию и понимают сообщение. Дошло до того, что изображения и видео используются больше для
			</p>
			<p class="font-montserrat text-white text-2xl font-semibold absolute bottom-10">Copyright © 2023</p>
		</div>
		<div class="ml-[66px] w-[494px]">
			<h1 class="text-white font-playfair text-[40px] font-semibold w-[494px]">Установить приложение</h1>
			<h2 class="text-white font-playfair text-[32px] font-semibold mt-[41px]">Скачать для Iphone</h2>
			<h2 class="text-white font-playfair text-[32px] font-semibold mt-[25px]">Скачать для Android</h2>
		</div>
		<div class="flex mt-[50px] ml-[122px] relative">
			<span class="w-[373px] inline-grid grid-cols-3 gap-4 h-[228px]">
				<span><img class="w-[100px]" src="./assets/mini-1.png" alt=""></span>
				<span><img class="w-[100px]" src="./assets/mini-2.png" alt=""></span>
				<span><img class="w-[100px]" src="./assets/mini-3.png" alt=""></span>
				<span><img class="w-[100px]" src="./assets/mini-4.png" alt=""></span>
				<span><img class="w-[100px]" src="./assets/mini-5.png" alt=""></span>
				<span><img class="w-[100px]" src="./assets/mini-6.png" alt=""></span>
			</span>
			<div class="pl-[41px]">
				<h1 class="text-[32px] text-white font-playfair font-semibold">Техническая поддержка</h1>
				<p class="text-[20px] text-white font-playfair font-semibold">routeup12@gmail.com</p>
				<p class="text-[20px] text-white font-playfair font-semibold">+7 (800) 555-35-35</p>
			</div>
			<p class="absolute bottom-10 text-white left-[104px]">Согласие на использование файлов RouteUp</p>
		</div>
	</footer>
</body>

</html>