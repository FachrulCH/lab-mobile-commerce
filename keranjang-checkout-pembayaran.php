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
  <link rel="stylesheet" href="css/jquery.mobile.datepicker.css">
  <link rel="stylesheet" href="css/jquery.mobile.datepicker.theme.css">
  <style type="text/css">
      .blur-filter {
          -webkit-filter: blur(2px);
          -moz-filter: blur(2px);
          -o-filter: blur(2px);
          -ms-filter: blur(2px);
          filter: blur(2px);
      }
    </style>
  <body>
  <?php
  include "view/keranjang-checkout-pembayaran.html";
  ?>
  </body>
</html>