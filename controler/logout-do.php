<?php
//echo "LOGOUT COY";
session_start(); 
session_destroy();
header("Location:../index.php");
?>