<?php
    // ѕодключение к базе данных mysql
    $db = mysql_connect(
    'localhost', // адрес сервера
    'user', // пользователь
    'password'  // пароль
    );
    mysql_select_db(
    'mydatabase', // им€ базе данных
    $db
    );
?>