<?php
include_once ('model/db_function.php');
$id = $_SESSION['order_session'];

$sqlCount = "SELECT count(order_product) as total FROM ng_order_tmp WHERE order_session ='{$id}'";
//$itung = good_query($sqlCount);
$itung = good_query_assoc($sqlCount);
?>
<div data-role="panel" id="lainnya" data-position="right" data-position-fixed="true" data-display="overlay" data-theme="a">
  <!-- panel content goes here -->
  <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Cari produk..." data-inset="true">
    <li><a href="#">celana-pendek-el-capitan</a></li>
    <li><a href="#">consina-sleeping-bag-expedition</a></li>
    <li><a href="#">cooking-set-consina-masterchef-4</a></li>
    <li><a href="#">jaket-consina-cold-light-4</a></li>
    <li><a href="#">tas-consina-camming-pro</a></li>
    <li><a href="#">tas-gadget-molokini-2</a></li>
  </ul>
  <ul data-role="listview" data-inset="true" class="ui-body-b ui-shadow-icon">
    <li><a href="index.php" class="ui-icon-home" data-transition="flip">Beranda</a></li>
    <li><a href="keranjang-checkout.php" class="ui-icon-shop" data-transition="pop">Keranjang <span class="ui-li-count"><?= $itung['total']; ?></span></a></li>
    <li><a href="produk-promo.php" class="ui-icon-heart" data-transition="slidedown">Promo</a></li>
    <li><a href="kategori.php" class="ui-icon-heart" data-transition="slidefade">Kategori</a></li>
    <li><a href="testimoni.php" class="ui-icon-comment" data-transition="turn">Testimoni</a></li>
    <li><a href="bantuan.php" class="ui-icon-info" data-transition="fade">Bantuan</a></li>
    <li><a href="logout.php" class="ui-icon-power" data-transition="slideup">Logout</a></li>
    <li><a href="?v=desktop" data-transition="flow">versi desktop</a></li>
  </ul>

  </div><!-- /panel -->

