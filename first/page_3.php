<?php
session_start();
{
   if(isset($_POST['send']))
{
    $_SESSION['name']=$_SESSION['name']+$_POST['name'];//в даному місці скріпт не спрацьовує причини знайти не можу хоча він ідентичний тому що знаходиться на page_2
}}

?>
<form method="POST" action="page_4.php">
    Какого тега НЕ существует:<br>
<input type="radio" name="name" value="0">
    <?php 
        echo htmlspecialchars("<pre>")
    ?>
        </input><br/>
<input type="radio" name="name" value="0">
    <?php 
        echo htmlspecialchars("<em>")
    ?>
        </input><br/>
<input type="radio" name="name" value="1">
    <?php 
        echo htmlspecialchars("<adress>")
    ?>
        </input><br>
<input type="submit" name="send" value="Next"></input><br>


