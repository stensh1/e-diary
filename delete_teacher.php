<?php

    require "db_connection.php";

    if ((isset($_POST['delete']) == TRUE))
    {
        $teacher_id = $_POST['delete'];

        $query = "delete from teachers where teacher_id = $teacher_id";
        $result = mysql_query($query);
    }

    mysql_close();

    require "teachers.php";

?>