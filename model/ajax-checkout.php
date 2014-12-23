<?php
include_once "db_function.php";
$metode = $_POST['metode'];
$total = $_POST['totalpembelian'];
$email = $_POST['email'];
//update cara pembayaran ke db
$sql = "UPDATE ng_order_tmp SET order_cara_pembayaran = '{$metode}' 
		WHERE order_session ='{$_SESSION['order_session']}' ";
$update = good_query($sql);

$_SESSION['metode'] = $metode;
$_SESSION['totAmount'] = $total;

if (@$_SESSION['insertPesanan'] == false) {
	
	if ($metode == 'A') {
	//generate VA
	$va = '777'.substr(number_format(time() * mt_rand(),0,'',''),0,7);
	$sqlA = "INSERT into ng_order(order_session, order_va, order_total, order_paid, order_email, order_cara_pembayaran)
			VALUE('{$_SESSION['order_session']}', '{$va}', '{$total}', '0', '{$email}', '{$metode}')";
	$update = good_query($sqlA);
	
	echo "Pesanan anda berhasil tersimpan \n
		Silahkan lanjutkan ke tab menu pembayaran untuk melihat detail informasi pembayaran anda \n
		total = $total || va number: $va || email: $email";

	$_SESSION['insertPesanan'] = true;

	}else{
	//metode CC
	echo "Pesanan anda berhasil tersimpan \n
	Silahkan lanjutkan ke tab menu pembayaran untuk melakukan pembayaran via kartu kredit";
	}


}else{

	//kalo udah pernah ke insert, lakukan update
	if ($metode == 'A') {
		echo "Pembayaran anda melalui ATM berhasil terupdate \n
		Silahkan lanjutkan ke tab menu pembayaran untuk melihat detail informasi pembayaran anda";
	}else{
		echo "Pembayaran anda melalui CC berhasil terupdate \n
		Silahkan lanjutkan ke tab menu pembayaran untuk melihat detail informasi pembayaran anda";
	}
}


?>