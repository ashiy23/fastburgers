<?php
$hn = 'localhost';
$un = 'fastburger_admin';
$pw = '(GI_2jbeM8wvGrR0';
$db = 'fast burger';

$conn = mysqli_connect($hn, $un, $pw, $db);
if (!$conn){
    die('Connection Failed: ' . mysqli_connect_error());
}
else{
    echo('');
}