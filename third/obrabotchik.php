<?php

$login = htmlspecialchars(@$_POST['login']);
$password = htmlspecialchars(@$_POST['password']);
$true_login = "pess1rko";
$true_password = "qwerty";
if($login!==$true_login || $password!==$true_password)
{
    echo "Please enter correct login or password";
    ?> <a href="index.php">Try again</a>

<?php
} else
      {  
    if(isset($_POST['check'])){
        setcookie("log",$login);
        setcookie("pass",$password);
             } else
                 {
        setcookie("log",$login, time()+30);
        setcookie("pass",$login, time()+30);
            
                  }
      
    
    
    ?><a href="autoriessucces.php">Clik to continue</a><?php
    
   
}
?>