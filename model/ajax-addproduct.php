<?php
include 'db_function.php';

$warna  = @$_POST['selectWarna'];
$jumlah = @$_POST['selectJumlah'];
$ukuran = @$_POST['selectUkuran'];
$namaItem = @$_POST['namaItem'];
$prodID = @$_POST['produk_id'];

$session = @$_SESSION['order_session'];
$ceklogin = cekLogin();

if (trim($ceklogin) != 'non'){
	//=== insert member
	$sql = "insert into ng_order_tmp
        (order_session,
        order_product,
        order_warna,
        order_ukuran,
        order_jumlah,
        order_email) 
		Values ('".$session."','".$prodID."', '".trim($warna)."','".$ukuran."','".$jumlah."', '".@$_SESSION['username']."')";

}else{
//Proses insert data order ke ng_order_tmp
$sql = "insert into ng_order_tmp
        (order_session,
        order_product,
        order_warna,
        order_ukuran,
        order_jumlah) 
Values ('".$session."','".$prodID."', '".trim($warna)."','".$ukuran."','".$jumlah."')";
}

$xsql = good_query($sql,2);

if ($xsql) {
  echo "Berhasil Ditambahkan kekeranjang";
}

?>