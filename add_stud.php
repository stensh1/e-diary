<?php

    require "db_connection.php";

    if ((isset($_POST['last_name']) == TRUE) && (isset($_POST['first_name']) == TRUE) && (isset($_POST['class_id'])) == TRUE)
    {
        $last_name = $_POST['last_name'];
        $first_name  = $_POST['first_name'];
        if (isset($_POST['patronymic']) == FALSE)
            $patronymic = "";
        else
            $patronymic = $_POST['patronymic'];
        $class_id = $_POST['class_id'];

        $query = "insert into students (last_name, first_name, patronymic, class_id) values ('$last_name', '$first_name', '$patronymic', '$class_id')";
        $result = mysql_query($query);
    }

    mysql_close();

    require "students.php";

?>