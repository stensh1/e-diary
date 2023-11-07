<?php

    require "db_connection.php";

    $subj_id = "Математика";

    if (isset($_POST['subject']) == TRUE)
        $subj_id = $_POST['subject'];

    $query = "select subj_id from teachers group by subj_id";
    $result = mysql_query($query);

    print("<div id = \"left_bar\">
               <p> Предметы: </p>
               <form method=\"post\" action = \"teachers.php\">");

    while ($sql = mysql_fetch_array($result))
    {
        $subj_id = $sql['subj_id'];

        print("<button type = \"submit\" name=\"subject\" value = \"$subj_id\">$subj_id</button>");
    }

    print("</form></div>");

    mysql_close();

?>