<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="./style/style.css" rel="stylesheet" type="text/css"/>
    <title>CПА</title>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="index.php">SPA-салон</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="index.php" title="">Главная</a></li>
			<li><a href="#services" title="">Услуги</a></li>
			<li><a href="#sale" title="">Акции</a></li>
			<?php if (!isset($_SESSION['auth'])) {?>
            <li><a href="login.php" title="">Вход</a></li>
			<?php } else {?>
			<li><a href="#"><?echo $_SESSION['login']." ";?></a><form action="login.php" method="post"><input name="loguot" class="button" type="submit" value="Выход"></form></li>
			<?php } ?>
		</ul>
		
    </div>
</div>