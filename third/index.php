<?php 

if(!isset($_COOKIE['log']) && !isset($_COOKIE['pass']))
{
    

?>
<form method="post" action="obrabotchik.php">
<input type="text" name="login"><br>
    <input type="text" name="password"><br>
    <input type="checkbox" name="check" >Borrowed computer<br>
    <input type="submit" name="send" value="Log in"><br>
    </form>
<?php
} else
{
    @$_POST['login']=$_COOKIE['log'];
    @$_POST['password']=$_COOKIE['pass'];
}
?>
    