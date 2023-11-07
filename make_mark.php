<?php

    require "db_connection.php";

    if ((isset($_POST['mark_val']) == TRUE) && (isset($_POST['mark_id']) == TRUE))
    {
        $mark_id = $_POST['mark_id'];
        $mark_val = $_POST['mark_val'];

        $query = "update marks set mark = $mark_val where mark_id = $mark_id";
        $result = mysql_query($query);
    }
    else if ((isset($_POST['mark_val']) == TRUE) && (isset($_POST['add_new']) == TRUE) && (isset($_POST['marks']) == TRUE))
    {
        $student_id = $_POST['marks'];
        $subj_id = $_POST['add_new'];
        $mark_val = $_POST['mark_val'];

        $query = "insert into marks (student_id, subj_id, mark) values ('$student_id', '$subj_id', '$mark_val')";
        $result = mysql_query($query);
    }

    mysql_close();

    require "marks.php";

?>