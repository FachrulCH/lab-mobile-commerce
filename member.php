<?php
session_start(); 
if ($_SESSION['login'] != true){
  //echo $_SESSION['login'];
  header("location:login.php");
}else{
?>

<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  
  <body>
    <!-- Start of first page: #home -->
    <div data-role="page" id="home" class="latar">
      <!-- panel content goes here -->
      <?php include 'panel.php'; ?>
      <div data-role="header" data-theme="b">
        <h1></h1>
        <a href="#" data-icon="carat-l" data-rel="back" data-theme="b" data-iconshadow="true" class="ui-btn-left"> <span class="ui-btn-text">Back</span>
          </a>
        </div><!-- /header -->
      <div role="main" class="ui-content">
      <h3>Histori Payment</h3>
        <hr/>

<?php 
  include_once "model/db_function.php";
  //Cek user
  $sql = "SELECT a.order_session, sum(b.order_product) total, a.order_total order_total, a.order_time,a.order_id,
          case a.order_paid when 1 then 'Terbayar' 
            else 'Belum Dibayar' 
          end flag 
          FROM ng_order a, ng_order_tmp b
          where a.order_session = b.order_session
          and a.order_member = '{$_SESSION['username']}'
          group by a.order_session";
  
  $doSql = good_query($sql);
  $hitung = good_num($doSql);

  if ($hitung > 0) {
    echo "<ul data-role='listview' data-inset='true'>";

    while ($d = mysql_fetch_array($doSql)) {
      $tgl = date('d M Y', strtotime($d['order_time']) );
?>
          <li><a href="#">Order "NG<?= $d['order_id'] ?>"
            <p>Tanggal <?= $tgl ?>, Jumlah pembelian <?= $d['total'] ?> pcs, total Rp.<?= $d['order_total'] ?></p></a>
            <p class="ui-li-aside"><i><?= $d['flag'] ?></i></p>
          </li>
<?php
    } //end while
    echo "</ul>";
  }else{
    echo "Anda tidak memiliki Histori order";
  }
?>
      </div>
      <!-- /content -->
      <!-- Footer -->
      <?php include 'footer.php'; ?>
    </div>
    <!-- /page one -->
    <!-- /page halaman -->
  </body>
</html>
<?php
}
?>