<?php
include_once 'model/db_function.php';

//default kategori
$order = "produk_category DESC"; 
$order2 = "produk_name ASC";

if (@$_GET['filter'] == 'terbaru'){
  $order = "date(produk_date) DESC";
}
            
/*if (@$_GET['urutkan'] == 'termurah'){
  $order .= ", produk_price ASC";
}*/

if (@$_GET['urutkan'] == 'termurah'){
  $order2 = "produk_price ASC";
}

/*if (@$_GET['urutkan'] == 'termahal'){
  $order .= ", produk_price DESC";
}*/
if (@$_GET['urutkan'] == 'termahal'){
  $order2 = "produk_price DESC";
}

/*if (@$_GET['urutkan'] == 'A'){
  $order .= ", produk_name ASC";
}*/
if (@$_GET['urutkan'] == 'A'){
  $order2 = "produk_name ASC";
}

/*if (@$_GET['urutkan'] == 'Z'){
  $order .= ", produk_name DESC";
}*/
if (@$_GET['urutkan'] == 'Z'){
  $order2 = "produk_name DESC";
}

/* $sql = "SELECT * FROM ng_produk 
        ORDER BY ".@$order." LIMIT 0 , 10;";*/
  $sql  = "SELECT *
          FROM (
          SELECT *
          FROM ng_produk
          ORDER BY $order
          LIMIT 0 , 10
          ) a
          ORDER BY $order2";


if (@$_GET['filter'] == 'terlaris'){
  $sql = "SELECT 
              produk_id,
              produk_img,
              produk_name,
              produk_deskripsi,
              produk_price,
              jum
          FROM
              (SELECT 
                  a.order_product, SUM(a.order_jumlah) as jum
              FROM
                  ng_order_tmp a
              GROUP BY a.order_product
              ORDER BY SUM(a.order_jumlah) DESC
              LIMIT 0 , 10) o,
              ng_produk p
          WHERE
              o.order_product = p.produk_id;";
}

if (@$_GET['kategori'] != ''){
  $kat = $_GET['kategori'];
  $sql = "SELECT 
              *
          FROM
              ng_produk p
          WHERE
              p.produk_category = {$kat}
          ORDER BY ".@$order2."
          LIMIT 0 , 10;";
}
include "view/produk.html";
?>

