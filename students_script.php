 <?php

    require "db_connection.php";

    $class_id = "1а";

    if(isset($_POST['class_id']) == TRUE)
        $class_id = $_POST['class_id'];

    $query = "select student_id, last_name, first_name, patronymic from students where class_id = '$class_id' order by last_name";
    $result = mysql_query($query);

    print("<div id = \"table\"><p id = \"Headliner\">Обучающиеся в $class_id классе</p>");

    $cnt = 0;
    while ($sql = mysql_fetch_array($result))
    {
        $cnt++;
        $student_id = $sql['student_id'];
        $last_name = $sql['last_name'];
        $first_name = $sql['first_name'];
        $patronymic = $sql['patronymic'];

        print ("<div id=\"student\"><form method=\"post\" action=\"marks.php\"><button name=\"marks\" value=\"$student_id\">$cnt. $last_name $first_name $patronymic</button></form><form id=\"x_mark\" method=\"post\" action=\"delete_stud.php\"><button type=\"submit\" name=\"delete\" value=\"$student_id\">Удалить</button></form></div>");
    }

    print("</div>");

    mysql_close();

?>