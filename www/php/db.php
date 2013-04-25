<?php
    // ѕодключение к базе данных mysql
    $db = mysql_connect(
    'localhost', // адрес сервера
    'root', // пользователь
    ''  // пароль
    );
    $select = mysql_select_db(
    'zoo_shop', // им€ базе данных
    $db
    );
?>