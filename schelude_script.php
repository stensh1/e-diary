 <?php

    require "db_connection.php";

    $class_id = "1а";

    if((isset($_POST['class_id'])) == TRUE)
        $class_id = $_POST['class_id'];

    $query = "select day, lesson_num, cab_id, subj_id from schelude where class_id = '$class_id'";
    $result = mysql_query($query);

    print("<div id = \"table\"> <p id = \"Headliner\"> Расписание для $class_id класса</p><div id = \"schelude\">");

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