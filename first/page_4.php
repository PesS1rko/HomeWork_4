<?php
session_start();

echo "Yo got ".$_SESSION['name'];

unset($_SESSION['name']);
?>
<br><a href="page_1.php">Back to first page</a>