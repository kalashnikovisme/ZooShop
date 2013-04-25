<html>
	<head>
		<title>РўРѕРІР°СЂС‹ РґР»СЏ РїРёС‚РѕРјС†РµРІ</title>
		<script type="text/javascript" src="../js/basket.js"></script>
	</head>
	<body>
		<table>
			<tr>
				<th>Название</th>
				<th>Цена</th>
				<th>Дата</th>
				<th></th>
			</tr>
			<?php
				$db = mysql_connect('localhost', 'root', '');
				$select = mysql_select_db('zoo_shop', $db);
				mysql_set_charset( 'utf8' );
				$result = mysql_query("SELECT * FROM products");
				if ($result) {
					while ($data = mysql_fetch_array($result)) {
						echo '<tr><th>'.$data["title"].'</th><th>'.$data["price"].'</th><th>'.$data["date"].'</th><th><button id = "basket_'.$data["id"].'" onclick = "push_button('.$data["id"].');">В корзину</button></th></tr>';
					}
				}
			?>
		</table>
	</body>
</html>