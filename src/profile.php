<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<!-- Links -->
	<link rel="stylesheet" href="./css/output.css">
</head>

<body style="overflow: hidden;">
	<div class="flex">
		<!-- Left bar -->
		<div class="relative w-[89px] bg-[#1675CA] h-screen pt-4">
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
				<a href="redactor.php"><img src="./assets/icon/options.svg" class="w-[40px] mx-[25px] mb-[38px]" alt=""></a>
				<a href="index-profile.php"><img src="./assets/icon/leave.svg" class="w-[40px] mx-[25px]" alt=""></a>
			</section>
		</div>

		<!-- Right bar -->
		<div class="relative bg-gray-400">
			<!-- Header -->
			<div class="bg-[#18578A] h-[99px] flex relative" style="width: 1800px;">
				<div class="w-[612px] h-[72px] rounded-[25px] bg-white ml-6 mt-[13px] flex relative">
					<svg class="mt-[21px] ml-[17px]" width="30" height="30" viewBox="0 0 30 30" fill="none"
						xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<rect opacity="0.75" width="30" height="30" fill="url(#pattern0)" />
						<defs>
							<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
								<use xlink:href="#image0_103_253" transform="scale(0.00195312)" />
							</pattern>
							<image id="image0_103_253" width="512" height="512"
								xlink:href="data:image/png;base64,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" />
						</defs>
					</svg>
					<div style="border: 1px solid black;" class="h-[48px] mt-3 ml-4 opacity-25"></div>
					<h1 class="text-2xl font-light ml-[10px] mt-4">Мой профиль</h1>
					<!-- <img src="./assets/poisk.svg" style="width: 30px;height: 30px;margin-left: 567px;" alt=""> -->
				</div>
			</div>
			<div class="absolute bottom-0 flex w-[1830px] h-[677px] bg-white">
				<!-- left -->
				<div class="w-[360px] ml-[55px] -translate-y-[144px]">
					<div class="w-[360px] h-[360px] rounded-full bg-white shadow-2xl pl-[73px] pt-[73px]">
						<img src="./assets/<? echo $_GET['logo'] ?>" class="w-[214px]" alt="">
					</div>
					<h1 class="text-[36px] mt-4 font-light font-inter">Подробнее</h1>
					<p class="text-2xl font-extralight font-inter mt-6"><? echo $_GET['aboutme'] ?></p>
					<div class="flex">
						<img src="./assets/icon/tag.svg" class="w-[25px] mt-[10px]" alt="">
						<p class="text-2xl font-extralight font-inter mt-[18px] ml-[3px] opacity-50">Russia, Yakutsk</p>
					</div>
					<h1 class="text-[36px] mt-6 font-light font-inter">Контакты</h1>
					<div class="flex mt-6">
						<img src="./assets/icon/mail.svg" class="w-[25px] mt-[10px]" alt="">
						<p class="text-2xl font-extralight font-inter mt-[18px] ml-[3px] text-[#77A7DF]"><? echo $_GET['tel'] ?></p>
					</div>
					<div class="flex">
						<img src="./assets/icon/phone.svg" class="w-[25px] mt-[10px]" alt="">
						<p class="text-2xl font-extralight font-inter mt-[18px] ml-[3px] text-[#77A7DF]">
							routeup12@gmail.com</p>
					</div>
				</div>

				<!-- Right -->
				<div class="w-[1354px] ml-[18px] pt-[53px]">
					<h1 class="text-5xl font-inter"><? echo $_GET['name']; echo " "; echo $_GET['lastname'] ?></h1>
					<h1 class="text-5xl font-inter font-light mt-[43px]">Недавняя активность</h1>
					<div class="w-[996px] h-[53px] bg-[#3A8DD9] rounded-[20px] pt-[11px] pl-4 mt-[15px]">
						<h1 class="text-2xl font-medium text-white">Новая публикация</h1>
					</div>
					<!-- 1 -->
					<p class="text-[18px] font-light mt-[11px]">Сегодня в 13:37</p>
					<p class="text-2xl font-light mt-[17px] ml-[15px]">Иван посетил мероприятие: “<span
							class="text-[#42A2E7]">Поход в
							лес</span>”.</p>
					<!-- 2 -->
					<p class="text-[18px] font-light mt-[28px]">11 сентября в 8:46</p>
					<p class="text-2xl font-light mt-[17px] ml-[15px]">Иван присоединился в клуб “<span
							class="text-[#42A2E7]">Спортивные ориентиры Якутска</span>”.</p>
				</div>
			</div>

		</div>
	</div>
</body>

</html>