<?php
    // ����������� � ���� ������ mysql
    $db = mysql_connect(
    'localhost', // ����� �������
    'root', // ������������
    ''  // ������
    );
    mysql_select_db(
    'zoo_shop', // ��� ���� ������
    $db
    );
?>