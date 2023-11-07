<?php

    require "db_connection.php";

    if ((isset($_POST['marks']) == TRUE))
        $student_id = $_POST['marks'];

    $query = "select class_id, last_name, first_name, patronymic from students where student_id = $student_id";
    $result_id = mysql_query($query);
    $sql = mysql_fetch_array($result_id);
    $class_id = $sql['class_id'];
    $last_name = $sql['last_name'];
    $first_name = $sql['first_name'];
    $patronymic = $sql['patronymic'];

    $query = "select subj_id from schelude where class_id = '$class_id' group by subj_id";
    $result_subj = mysql_query($query);

    print("<div id = \"table\"><p id = \"Headliner\">Успеваемость учащегося $last_name  $first_name $patronymic</p>");

    while ($sql_subj = mysql_fetch_array($result_subj))
    {
        print("<div class = \"line\">");
        $subj_id = $sql_subj['subj_id'];
        print("<div class = \"subj_name\"> $subj_id</div>");

        $query = "select mark_id, mark from marks where student_id = $student_id and subj_id = '$subj_id' order by subj_id";
        $result = mysql_query($query);

        while ($sql = mysql_fetch_array($result))
        {
            $mark_id = $sql['mark_id'];
            $mark = $sql['mark'];
            print("<div class = \"mark\"><form method = \"post\" action = \"make_mark.php\"><input name = \"mark_val\" class = \"mark_form\" type = \"text\" value = \"$mark\" /><button name = \"mark_id\" class = \"acc_form\" type=\"submit\" value=\"$mark_id\">✓</button></form></div>");
        }

        print("<form class = \"add_new_mark\" method = \"post\" action = \"make_mark.php\"><input name = \"mark_val\" class = \"mark_form\" type = \"text\" value = \"\" /><button name = \"add_new\" class = \"acc_form\" type=\"submit\" value=\"$subj_id\">✓</button><input name = \"marks\" type=\"hidden\" value=\"$student_id\"></form></div>");
    }

    print("</div>");

    mysql_close();

?>