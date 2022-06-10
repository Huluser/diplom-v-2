<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Приложение</title>


<link href="css/bootstrap.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style type="text/css">
.table-pg{width:auto}
</style>
	
</head>

<?
$title = "Главная страница"; // название формы
require "blocks/header.php"; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>

<main>
	<section>
		<div class="container mt-4">
			<div class="row">
				<div class="col">
					
				</div>
			</div>
		</div>

		<!-- Если авторизован выведет приветствие -->
		<? if (isset($_SESSION['logged_user'])) : ?>
			Здравствуйте,<? echo $_SESSION['logged_user']->name; ?></br>

			<body>
<nav class="navbar navbar-default">
<div class="container-fluid">

<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">ТСЖ "Полет"</a>
</div>


<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="active"><a href="/">Главная</span></a></li>
<li><a href="pages/pokazaniaw.php">Показания воды</a></li>
		<li><a href="pages/pokazanial.php">Показания света</a></li>
		<li><a href="pages/debts.php">Долги</a></li>
		
		
		
	
		
</ul>
</div>
</div>
</nav>
</header>

<div id="content">
</div>
<body>

<li>
	Товарищество собственников жилья или ТСЖ — это некоммерческая организация, которая представляет собой объединение собственников помещений в многоквартирном доме для совместного управления имуществом.
</li>

<li>
	Руководит ТСЖ Председатель, который подчиняеться Правлению ТСЖ. В Правление входят собственники квартир.
</li>

<li>
	Председатель ТСЖ "Полет" - Кобяцкая Оксана Валерьевна
 </li>
 <li>
	Бухгалтер ТСЖ "Полет" - Асеченко Кира Викторовна
</li>

	<img src="img/11.jpg" alt="Фотография 1" width="720" height="540">
	<img src="img/22.jpg" alt="Фотография 2" width="720" height="540">
	</body>

			<!-- Пользователь может нажать выйти для выхода из системы -->
			
			<center>
			<a href="function/logout.php">Выйти</a> <!-- файл logout.php создадим ниже -->
		<? else : ?>
 			</center>
 			
			<!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->

			<center>
			<a href="pages/avtorization.php">Авторизоваться</a><br>
			<a href="pages/registration.php">Регистрация</a>
			</center>
		<? endif; ?>

	</section>
</main>


<? require "blocks/footer.php";