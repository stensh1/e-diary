 <?php

    require "db_connection.php";

    if((isset($_POST['subject'])) == TRUE)
        $teacher_id = $_POST['subject'];

    $query = "select last_name, first_name, patronymic from teachers where teacher_id = $teacher_id";
    $result = mysql_query($query);
    $sql = mysql_fetch_array($result);

    $last_name = $sql['last_name'];
    $first_name = $sql['first_name'];
    $patronymic = $sql['patronymic'];

    print("<div id = \"table\"> <p id = \"Headliner\"> Расписание для $last_name $first_name $patronymic</p><div id = \"schelude\">");

    $query = "select class_id, day, lesson_num, cab_id, subj_id from schelude where teacher_id = $teacher_id";
    $result = mysql_query($query);

    $flag = 0;
    $day = "0";
    while ($a = mysql_fetch_array($result))
    {
        if ($day != $a['day'] && $flag != 0)
        {
            $day = $a['day'];
            print ("</div><div class = \"block\"><div class = \"day\">$day</div>");
        }
        else if ($day != $a['day'] && $flag == 0)
        {
            $day=$a['day'];
            print ("<div class = \"block\"><div class = \"day\">$day</div>");
            $flag = 1;
        }

        $lesson_num = $a['lesson_num'];
        $cab_id = $a['cab_id'];
        $subj_id = $a['subj_id'];

        print ("<div class = \"string\">$lesson_num. $subj_id</div><div class = \"cab\">каб. $cab_id</div>");
    }

    print("</div></div></div>");

    mysql_close();

?>