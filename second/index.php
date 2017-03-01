<?php
$random = rand(0,4);
session_start();
if(!isset($_SESSION['img']))
{
@$_SESSION['img']=$random;
    print '<img src=images/' .generateImg($random).'>';
}
else
{    
    print '<img src=images/' .generateImg($_SESSION['img']).'>';    
}
/*setcookie('img',$a);
if(isset($_COOKIE['img'])){    
print '<img src=images/' .generateImg($_COOKIE['img']).'>';  
} else{
    $_COOKIE['img']=$random;
print '<img src=images/' .generateImg($random).'>';
}*/
 function generateImg($key){  
$array=scandir('images');
$newArr=0-count($array)+2;
    //так як scandir() в перші два елементи масиву записує рівні знаходження папки "images" то потрібно ці елементи із масиву видаляти, я використовуватиму ф-цію array_splice
array_splice($array,0,$newArr);    
    return @$array[$key];
}



?>