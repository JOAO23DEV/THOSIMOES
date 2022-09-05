<?php

$db =  mysqli_connect('localhost', 'root', '', 'thosimoes');
if (!$db) die('Failed to connect to database server!<br>'.mysql_error());
mysqli_set_charset($db,'utf8');
setlocale(LC_MONETARY, 'pt_PT');

/* define o fuso horário */

date_default_timezone_set('Europe/Lisbon');
?>