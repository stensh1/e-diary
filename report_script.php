 <?php

    require "db_connection.php";

    print("<p id = \"Headliner\"> Отчет о работе учебного заведения</p><div id = \"table_H\">Количество учителей: </div>");

    $query = "select subj_id from teachers group by subj_id";
    $result = mysql_query($query);
    $cnt = 0;

    while ($a = mysql_fetch_array($result))
    {
       $subj_id = $a['subj_id'];
       $query = "select teacher_id from teachers where subj_id = '$subj_id'";
       $result_id = mysql_query($query);

       while ($sql = mysql_fetch_array($result_id))
           $cnt++;

       print("<div id = \"table_full\">$subj_id: $cnt</div>");
    }

    $cnt = 0;

    $query = "select cab_id from schelude group by cab_id";
    $result = mysql_query($query);

    while ($sql = mysql_fetch_array($result))
        $cnt++;

    print("<div id = \"table_H\">Количество кабинетов: $cnt</div>");

    $query = "select class_id from students group by class_id";
    $result = mysql_query($query);

    $A = 0; $B = 0; $F = 0;

    print("<div id = \"table_H\">Количество учеников в классах: </div>");
    while ($a = mysql_fetch_array($result))
    {
       $cnt = 0;
       $class_id = $a['class_id'];
       $query = "select student_id from students where class_id = '$class_id'";
       $result_id = mysql_query($query);

       while ($sql = mysql_fetch_array($result_id))
       {
           $student_id = $sql['student_id'];
           $cnt++;
           $query = "select mark from marks where student_id = $student_id";
           $result_mark = mysql_query($query);

           $sum = 0;
           $cnt1 = 0;
           while ($sql = mysql_fetch_array($result_mark))
           {
               $sum += $sql['mark'];
               $cnt1++;
           }

           if ($sum != 0)
               $sum = $sum / $cnt1;

           if ($sum < 2.5) $F++;
           else if ($sum > 3.5 && $sum < 5) $B++;
           else if ($sum == 5) $A++;
       }

       print("<div id = \"table_full\">$class_id: $cnt</div>");
    }

    print("<div id = \"table_H\">Число отличников: $A</div><div id = \"table_H\">Число хорошистов: $B</div><div id = \"table_H\">Число двоечников: $F</div>");

    mysql_close();

?>