<?php
    // ����������� � ���� ������ mysql
    $db = mysql_connect(
    'localhost', // ����� �������
    'root', // ������������
    ''  // ������
    );
    $select = mysql_select_db(
    'zoo_shop', // ��� ���� ������
    $db
    );
?>