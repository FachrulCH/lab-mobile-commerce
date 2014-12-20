<?php
include "model/db_function.php";
$sessionID = $_SESSION['order_session'];
$sql = "Select * from ng_order_tmp where order_session ='".$sessionID."'";
$data = good_query_assoc($sql);
$sessionJum = mysql_num_rows(good_query($sql));
//echo "Session awal: $sessionID apakah = $data[order_session] <br> jumlah = $sessionJum";
$sqlKonfirm =   "SELECT * FROM ng_order_tmp a, ng_produk b 
                        WHERE a.order_product = b.produk_id 
                        and order_session = '".$sessionID."' ORDER BY order_id";
$k = good_query_assoc($sqlKonfirm);
?>
<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  <style type="text/css">
    .ui-li-static.ui-collapsible > .ui-collapsible-heading {
    margin: 0;
    }
    .ui-li-static.ui-collapsible {
        padding: 0;
    }
    .ui-li-static.ui-collapsible > .ui-collapsible-heading > .ui-btn {
        border-top-width: 0;
    }
    .ui-li-static.ui-collapsible > .ui-collapsible-heading.ui-collapsible-heading-collapsed > .ui-btn,
    .ui-li-static.ui-collapsible > .ui-collapsible-content {
        border-bottom-width: 0;
    }
  </style>
  <!-- ____ Load AJAX ____ -->
  <script src="js/custom.js"></script>
  <body>
  <?php
  include "view/keranjang-checkout-pesanan.html";
  include "view/keranjang-checkout-konfirmasi.html";
  include "view/keranjang-checkout-pembayaran.html";
  ?>
  </body>
</html>