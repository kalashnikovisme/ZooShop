<html>
	<head>
		<title>Товары для питомцев</title>
		<script type="text/javascript" src="../js/basket.js"></script>
		<script type="text/javascript" src="../js/jquery-1.4.1.js"></script>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
	</head>
	<body>
		<table id="table">
			<tr>
				<th>��������</th>
				<th>����</th>
				<th>����</th>
				<th></th>
			</tr>
			<?php
				$db = mysql_connect('localhost', 'root', '');
				$select = mysql_select_db('zoo_shop', $db);
				mysql_set_charset('utf8');
				$result = mysql_query("SELECT * FROM products");
				if ($result) {
					while ($data = mysql_fetch_array($result)) {
						echo '<tr><th>' . $data["title"] . '</th><th>' . $data["price"] . '</th><th>' . $data["date"] . '</th><th><button style = "background: white" id = "basket_' . $data["id"] . '" onclick = "push_button(' . $data["id"] . ');">� �������</button></th></tr>';
					}
				}
			?>
		</table>
		<button onclick="confirm()">�����������</button>
		<div id ="div_add">
		</div>
	</body>
</html>