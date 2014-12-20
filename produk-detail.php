<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();

include 'model/db_function.php';

$id = $_GET['id'];
$sql = "select * from ng_produk where produk_id = $id";
$data = good_query_assoc($sql);

include "view/produk-detail.html";

ob_flush(); 
?>