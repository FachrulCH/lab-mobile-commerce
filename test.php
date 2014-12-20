<?php
echo uniqid('ngunung', true);
echo "<br/>Atau pake ini <br/>";
echo "<br/>Atau MD5 pake ini <br/>";
//echo md5(uniqid('ng', true));
/*
$prefix = exec("hostname");
echo uniqid($prefix, true);
*/
session_start(); 
echo $_SESSION['order_session'];
$va = '777'.substr(number_format(time() * mt_rand(),0,'',''),0,7);

echo "<br/> no va: $va";
?>