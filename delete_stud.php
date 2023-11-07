<?php

    require "db_connection.php";

    if ((isset($_POST['delete']) == TRUE))
    {
        $student_id = $_POST['delete'];

        $query = "delete from students where student_id = '$student_id'";
        $result = mysql_query($query);
    }

    mysql_close();

    require "students.php";

?>