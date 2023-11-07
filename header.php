<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv = "Content-Type"; content = "text/html"; charset = "UTF-8" />
        <link rel = "stylesheet"; type = "text/css"; href = "style.css"/>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <title>ETUDiary Administration Panel</title>
    </head>

    <body>

        <div id = "header">
            <div class = "logo">
                <a href = "index.php"><p><em>ETU</em><sup>diary</sup></p></a>
            </div>

            <div id = "menu">
                <form method = "POST" action = "teachers.php">
                    <input type = "submit" name="teachers" value = "Преподавательский состав">
                </form>

                <form method = "POST" action = "students.php">
                    <input type = "submit" name="students" value = "Ученики">
                </form>

                <form method = "POST" action = "schelude.php">
                    <input type = "submit" name="schelude" value = "Расписание">
                </form>

                <form method = "POST" action = "report.php">
                    <input type = "submit" name="report" value = "Отчет о работе учебного заведения">
                </form>
            </div>

            <div id = "profile_form">
                <p style = "text-align: right;"> Грунова Надежда Валентиновна<br>Завуч</p>
                <img src = "/src/images/head_teacher.jpg" alt = "Ваш аватар" />
            </div>
        </div>