<?php
//починаємо сесію і в глобальну змінну $_SESSION заносимо значення яке вибрав користувач
     session_start();
            if(isset($_POST['send']))
{
    $_SESSION['name']=$_POST['name'];
    echo $_SESSION['name'];
}     
     ?>
<form method="POST" action="page_2.php">
    На сайте внутри папки pages находится файл page.html. А внутри папки images находится файл foto.jpg. Причём папки images и pages лежат в корне сайта. Как правильно написать путь к foto.jpg из файла page.html:<br>
<input name="name" type="radio"  value ="1" >../images/foto.jpg</input><br/>
<input name="name" type="radio"  value="0">pages/images/foto.jpgpages/images/foto.jpg</input><br/>
<input name="name" type="radio"  value="0">images/foto.jpg</input><br>
<input type="submit" name="send" value="Next"></input>

<?php

?>