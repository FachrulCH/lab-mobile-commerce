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
        <ul data-role="listview" data-inset="true">
          <li><a href="#">Order no: 123
            <p>Sabtu, 01-Jan-14, Jumlah pembelian Rp 999.000 </p></a>
            <p class="ui-li-aside"><i>Belum Dibayar</i></p>
            </li>
          <li><a href="#">Order no: 123
            <p>Sabtu, 01-Jan-14, Jumlah pembelian Rp 999.000 </p></a>
            <p class="ui-li-aside"><i>Pembayaran Kurang</i></p>
            </li>
          <li><a href="#">Order no: 124
            <p>Sabtu, 01-Jan-14, Jumlah pembelian Rp 999.000 </p></a>
            <p class="ui-li-aside"><i>Belum Dikirim NG</i></p>
            </li>
          <li><a href="#">Order no: 123
            <p>Sabtu, 01-Jan-14, Jumlah pembelian Rp 999.000 </p></a>
            <p class="ui-li-aside"><i>Trx Sukses</i></p>
            </li>
        </ul>
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