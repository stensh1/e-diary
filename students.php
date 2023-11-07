<?php require "header.php"; ?>

<div id = "content">
    <?php require "left_bar_stud.php"; ?>

    <div id = "panel">
        <a class="show-btn" href="javascript:void(0)" onclick = "document.getElementById('envelope').style.display='block';document.getElementById('fade').style.display='block'">Добавить ученика</a>
        <div id="envelope" class="envelope">
            <a class="close-btn" href="javascript:void(0)" onclick = "document.getElementById('envelope').style.display='none';document.getElementById('fade').style.display='none'">Х</a>
            <h1 class="title">Добавление нового обучающегося</h1>
            <form method="post" action="add_stud.php">
                <input type="text" name="last_name" onclick="this.value='';" onfocus="this.select()" placeholder="Фамилия" class="your-name"/>
                <input type="text" name="first_name" onclick="this.value='';" onfocus="this.select()" placeholder="Имя" class="your-name"/>
                <input type="text" name="patronymic" onclick="this.value='';" onfocus="this.select()" placeholder="Отчество" class="your-name"/>
                <input type="text" name="class_id" onclick="this.value='';" onfocus="this.select()" placeholder="Класс" class="your-name"/>
                <input type="submit" name="send" value="Добавить" class="send-message">
            </form>
        </div>
        <div id="fade" class="black-overlay"></div>
    </div>
    <?php require "students_script.php"; ?>
</div>

<?php require "footer.php"; ?>