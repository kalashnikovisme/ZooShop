<?php
// подключаем файл конфигурации
require_once "php/config.php";
// подключаем файл для работы с базой данных
require_once "php/db.php";
?>
<!Doctype HTML>
<HTML>
	<HEAD>
		<Meta charset="utf-8">
		<Title>Zoo</Title>
	</head>
	<body>
	<style>
		body
		{

			color: blue; /* Цвет текста */
		}

		img
		{
			border: 10px solid green;
		}
		h1
		{
			color: red; /* Цвет текста */
		}
		h2
		{
			color: green; /* Цвет текста */
		}
		h3
		{
			color: blue; /* Цвет текста */
		}
		A {
			color: #800000; /* Цвет текста */
			background: #ffc; /* Цвет фона */
			padding: 2px; /* Поля вокруг текста */
		}
	</style>
	<h1 align="center">Зоомагазин "Для вас"</h1>
	<p align="center"><em> <big><big>В нашем интернет магазине продаются аквариумные рыбки,
					волнистые попугайчики канарейки,
	  грызуны: ручные крысы и хомячи,
	  рептилии — маленькие ящерицы и змеи.
	  А также товары для любимцев.
	  И оформать заказ через сайт с доставкой на дом </big></big></em></p>


	<div <align="right"><img src="1.jpg" width="98%" height="100%">
			<div align="left">
				<p>
				<table border="1" width="100%" cellpadding="5">
					<ul type="circle">
						<tr>
							<th><h2>информация о питомцах</h2></th>
							<th><li><a href="pt.html" target="_self">Волнистые попугайчики</a></li></th>
						<th><li><a href="rp.html" target="_self">Аквариумные рыбки</a></li></th>
						<th><li><a href="gr.html" target="_self">Домашние хомячки</a></li></th>
						<th><li><a href="reb.html" target="_self"> Домашняя рептилия</a></li></th>
						<tr>
					</ul>
					</p>
				</table>
				<center><a href="/php/products.php"><h2>Товары для питомцев</h2></a></center>
				</body>
				</html>
