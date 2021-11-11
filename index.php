<?php 
session_start();
?>
<html land="ru">
	<?php
	if (!isset($_SESSION["theme"])) {
		$_SESSION["theme"] = "main";
	}
	?>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo $_SESSION["theme"]?>.css" id="theme-link">
		<title>Тёмная тема</title><!--Название сайта-->
	</head>
	<body>
		<div class="wrapper">
			<div class="theme-button" id="theme-button">Сменить тему</div><!--Смена темы-->
			<header class="header">
				<div class="header_content">
					<h1>Сайт с тёмной темой</h1><!--Заголовок-->
					<nav class="nav">
						<div class="nav_content"><!--Меню-->
							<a href="#" class="nav_item nav_item_active">Главная</a>
							<a href="#" class="nav_item">Новости</a>
							<a href="#" class="nav_item">О нас</a>
							<a href="#" class="nav_item">Контакты</a>
						</div>
					</nav>
				</div>
			</header>
			<main class="main">
				<article class="main_content"><!--Текст-->
					<p><!-- lorem120 --></p>
				</article>
			</main>
		</div>
		<script src="themes.js"></script>
	</body>
</html>