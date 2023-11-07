<?php

    require "db_connection.php";

    $student_id = 1;
    $class_id = "1а";

    if (isset($_POST['marks']) == TRUE)
        $student_id = $_POST['marks'];

    $query = "select class_id, last_name, first_name, patronymic from students where student_id = $student_id";
    $result = mysql_query($query);
    $sql = mysql_fetch_array($result);
    $class_id = $sql['class_id'];

    $query = "select student_id, last_name, first_name, patronymic from students where class_id = '$class_id' group by last_name";
    $result = mysql_query($query);

    print("<div id = \"left_bar\">
               <p> Учащиеся $class_id класса: </p>
               <form method=\"post\" action = \"marks.php\">");

    while ($sql = mysql_fetch_array($result))
    {
        $student_id = $sql['student_id'];
        $last_name = $sql['last_name'];
        $first_name = $sql['first_name'];
        $patronymic = $sql['patronymic'];

        print("<button type = \"submit\" name=\"marks\" value = \"$student_id\">$last_name $first_name $patronymic</button>");
    }

    print("</form></div>");

    mysql_close();

?>