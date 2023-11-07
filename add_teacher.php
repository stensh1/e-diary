<?php

    require "db_connection.php";

    if ((isset($_POST['last_name']) == TRUE) && (isset($_POST['first_name']) == TRUE) && (isset($_POST['subj_id'])) == TRUE)
    {
        $last_name = $_POST['last_name'];
        $first_name  = $_POST['first_name'];

        if (isset($_POST['patronymic']) == FALSE)
            $patronymic = "";
        else
            $patronymic = $_POST['patronymic'];

        if (isset($_POST['cab_id']) == FALSE)
            $cab_id = "";
        else
            $cab_id = $_POST['cab_id'];

        $subj_id = $_POST['subj_id'];

        $query = "insert into teachers (last_name, first_name, patronymic, cab_id, subj_id) values ('$last_name', '$first_name', '$patronymic', '$cab_id', '$subj_id')";
        $result = mysql_query($query);
    }

    mysql_close();

    require "teachers.php";

?>