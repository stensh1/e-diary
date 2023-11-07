<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "etudb";

    $sql = mysql_connect($hostname, $username, $password);
    if (!$sql)
    {
          echo 'Не могу соединиться с БД. Код ошибки: ' . mysql_connect_errno() . ', ошибка: ' . mysql_connect_error();
          exit;
    }

    mysql_query("SET NAMES UTF-8");
    mysql_select_db($dbname);

?>