<?php
session_start();




if(isset($_POST['send']))
{    
    @$_SESSION['name']=$_SESSION['name']+$_POST['name'];//@ - стоїть тому що виникає помилка що браузер не знає що таке поле "neme" в масиві, проте скріпт працює    
}
?>
<form method="POST" action="page_3.php">
    Петру надо сделать нумерованный список, какой из тегов ему надо использовать:<br>
    
<input type="radio" name="name" value="0"><?php echo htmlspecialchars("<tr>")?></input><br/>
<input type="radio" name="name" value="1"><?php echo htmlspecialchars("<ol>")?></input><br/>
<input type="radio" name="name" value="0"><?php echo htmlspecialchars("<list>")?></input><br>
<input type="submit" name="send" value="Next"></input><br>
<?php

?>