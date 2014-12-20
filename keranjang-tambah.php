<?php
include 'model/db_function.php';

$warna  = @$_GET['selectWarna'];
$jumlah = @$_GET['selectJumlah'];
$ukuran = @$_GET['selectUkuran'];
$namaItem = @$_GET['namaItem'];
$prodID = @$_GET['produk_id'];

$session = @$_SESSION['order_session'];

//Proses insert data order ke ng_order_tmp
$sql = "insert into ng_order_tmp
        (order_session,
        order_product,
        order_warna,
        order_ukuran,
        order_jumlah) 
Values ('".$session."','".$prodID."', '".trim($warna)."','".$ukuran."','".$jumlah."')";
$xsql = good_query($sql,2);
?>

<!DOCTYPE html>
<html>
  <!-- Header -->
  <?php include 'header.php'; ?>
  
  <body>
    
<div data-role="page" data-dialog="true">

    <div data-role="header" data-theme="b">
    <h1>Keranjang Belanja</h1>
    </div>

    <div role="main" class="ui-content">
      <p>Berhasil ditambahkan kedalam keranjang belanjaan anda</p>
      <i>Silahkan Cek keranjang belanja anda</i>
      <?php //cek udah login belomnya, kalo belom login bakalan muncul saran di bawah
      if (@$_SESSION['login'] != true){
        echo "<p>Anda belum login, silahkan login pada menu Akun untuk fitur history transaction";
      }
      ?>
      <hr/>
      <p><b>Nama Barang:</b> <?= $namaItem ?> </p>
      <?php if($warna != ''){ ?>
        <p><b>Warna:</b> <?= $warna ?> </p><?php } ?>
      <?php if($ukuran != ''){ ?>
        <p><b>Ukuran:</b> <?= $ukuran ?> </p> <?php } ?>
      <p><b>Jumlah:</b> <?= $jumlah ?> </p>
      <a href="keranjang-checkout.php" class="ui-btn ui-shadow-icon ui-corner-all ui-btn-b ui-icon-check ui-btn-icon-left">Lanjut pembayaran</a>
      <a href="#" data-rel="back" class="ui-btn ui-btn-b ui-shadow-icon ui-corner-all ui-icon-shop ui-btn-icon-left">Kembali Belanja</a>
    </div>
  </div>
  </body>
</html>