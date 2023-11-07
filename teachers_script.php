 <?php

    require "db_connection.php";

    if (isset($_POST['subject']) == TRUE)
        $subj_id = $_POST['subject'];

    $query = "select teacher_id, last_name, first_name, patronymic, cab_id from teachers where subj_id = '$subj_id' order by last_name";
    $result = mysql_query($query);

    print("<div id = \"table\"><p id = \"Headliner\">Преподаватели по дисциплине $subj_id</p>");

    $cnt = 0;
    while ($sql = mysql_fetch_array($result))
    {
        $cnt++;
        $teacher_id = $sql['teacher_id'];
        $last_name = $sql['last_name'];
        $first_name = $sql['first_name'];
        $patronymic = $sql['patronymic'];
        $cab_id = $sql['cab_id'];

        print ("<div id=\"student\"><form method=\"post\" action=\"teacher_schelude.php\"><button name=\"subject\" value=\"$teacher_id\">$cnt. $last_name $first_name $patronymic каб. $cab_id</button></form><form id=\"x_mark\" method=\"post\" action=\"delete_teacher.php\"><button type=\"submit\" name=\"delete\" value=\"$teacher_id\">Удалить</button></form></div>");
    }

    print("</div>");

    mysql_close();

?>