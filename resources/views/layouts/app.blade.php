<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	
	<title>{{ isset($seo_information->title) ? $seo_information->title : env('APP_NAME') }}</title>
	<meta name="description" content="{{ isset($seo_information->description) ? $seo_information->description : '' }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<meta property="og:title" content="{{ isset($seo_information->title) ? $seo_information->title : env('APP_NAME') }}"/>
	<meta property="og:image" content="{{ isset($seo_information->open_graph) ? $seo_information->open_graph : '' }}"/>
	<meta property="og:description" content="{{ isset($seo_information->description) ? $seo_information->description : '' }}"/>

	<link rel="icon" href="/template/favicon/favicon.ico" type="image/x-icon">
  	<link rel="shortcut icon" href="/template/favicon/favicon.ico" type="image/x-icon">

	<link rel="mask-icon" href="./images/safari-pinned-tab.svg" color="#14252C">
	<meta name="msapplication-TileColor" content="##14252C">
	<meta name="theme-color" content="#14252C">

    @vite(['resources/css/app.css', 'resources/css/scss/main.scss'])
	
</head>

<body class="bg-brand">
	<!-- Site header -->
	<header>
		@include('partials.top-navigation-menu')
	</header>
	@yield('content')
	<!-- Site footer -->
	<footer class="pt-24 pb-8">
		<div class="border-t lg:border-b mb-8">
			<div class="container">
				<div class="grid md:grid-cols-3 lg:grid-cols-5 gap-8">
					<div class="hidden lg:block lg:border-r py-8 lg:col-span-2">
						<p class="text-base lg:text-base xl:text-lg 3xl:text-2xl uppercase pb-12">Александр Жук</p>
						<div class="opacity-50 ff-Montserrat text-xs">
							<p><a href="#">Политика конфидициальности</a></p>
							<p>Copyright ©2023</p>
						</div>
					</div>
					<div class="py-8">
						<p class="uppercase pb-8 font-medium">Магазин</p>
						<div class="opacity-50">
							<p class="pb-4"><a href="#">Для детей</a></p>
							<p class="pb-4"><a href="#">Для всех</a></p>
						</div>
					</div>
					<div class="py-8 ">
						<p class="uppercase pb-8 font-medium">Информация</p>
						<div class="opacity-50">
							<p class="pb-4"><a href="#">Обо мне</a></p>
							<p class="pb-4"><a href="#">Как стать моряком</a></p>
							<p class="pb-4"><a href="#">Как стать блогером</a></p>
							<p class="pb-4"><a href="#">Telegram - канал</a></p>
							<p class="pb-4"><a href="#">Магазин</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="grid md:grid-cols-3 lg:grid-cols-5 gap-8">
				<div class="flex flex-col">
					<div><p class="font-medium pb-8">Соцсети</p></div>
					<div class="flex gap-5">
						<a href="#"><img src="{{ asset('template/images/insta.svg') }}" alt=""></a>
						<a href="#"><img src="{{ asset('template/images/youtube.svg') }}" alt=""></a>
						<a href="#"><img src="{{ asset('template/images/tiktok.svg') }}" alt=""></a>
					</div>
				</div>
				<div class="lg:col-start-3">
					<div><p class="font-medium pb-8">Команда<br>разработчиков</p></div>
				</div>
				<div>
					<div><p class="font-medium pb-3">Дизайн</p></div>
					<p class="pb-4 opacity-50"><a href="#">Дарья Акименко</a></p>
				</div>
				<div>
					<div><p class="font-medium pb-3">Разработка</p> </div>
					<p class="pb-4 opacity-50"><a href="#">компания "Ракурс"</a></p>
				</div>
			</div>
			<div class="md:hidden py-8">
				<div class="opacity-50 ff-Montserrat text-xs">
					<p><a href="#">Политика конфидициальности</a></p>
					<p>Copyright ©2023</p>
				</div>
			</div>
		</div>
	</footer>
	@vite(['resources/js/app.js'])

</body>
</html>