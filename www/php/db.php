<?php
    // ����������� � ���� ������ mysql
    $db = mysql_connect(
    'localhost', // ����� �������
    'user', // ������������
    'password'  // ������
    );
    mysql_select_db(
    'mydatabase', // ��� ���� ������
    $db
    );
?>