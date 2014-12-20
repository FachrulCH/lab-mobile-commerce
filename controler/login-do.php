<?php
session_start(); 
$_SESSION['login'] = true;
$_SESSION['username'] = 'alul';

header("Location:../index.php");
?>