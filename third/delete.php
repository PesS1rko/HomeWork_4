<?php
if(isset($_POST['exit']))
{
    setcookie("log","",time()-60*99,"/");
    setcookie("pass","",time()-60*99,"/");
}
?>