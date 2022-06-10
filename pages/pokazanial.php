<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Приложение</title>


<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<style type="text/css">.table-pg{width:auto}</style>
	
	
	
</head>
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
<li><a href="pokazaniaw.php">Показания воды</a></li>
		<li><a href="pokazanial.php">Показания света</a></li>
		<li><a href="debts.php">Долги</a></li>
		
		
		
		
</ul>
</div>
</div>
</nav>
</header>

<? require "../db.php"; ?>
	<div class="container">
		<form action="./function/insert.php" class="form-signin" method="POST">
			<h2>Показания cвета</h2>
			<?
			if (isset($smsg)) { ?>
				<div class="alert alert-success" role="alert">
					<? echo $smsg; ?>
				</div>
			<? } ?>
			<? if (isset($fsmsg)) { ?>
				<div class="alert alert-danger" role="alert">
					<? echo $fsmsg; ?>
				</div>
			<? } ?>
			<input type="hidden" name="light" value="light">
			<input type="text" name="id" class="form-control" placeholder="Введите номер лиц. счета" required="">
			<input type="text" name="readings" class="form-control" placeholder="Введите показание" required="">
			<button class="btn btn-lg btn-outline-primary btn-block" type="submit">Отправить показание</button>
	



		</form>
	</div>


<footer>
</footer>
</body>
</html>