<?php
include_once "db_function.php";
$metode = $_POST['metode'];
$total 	= $_POST['totalpembelian'];
$email 	= $_POST['email'];
$member = isset($_SESSION['username']) ? $_SESSION['username'] : 'non';
//update cara pembayaran ke db
$sql = "UPDATE ng_order_tmp SET order_cara_pembayaran = '{$metode}' 
		WHERE order_session ='{$_SESSION['order_session']}' ";
$update = good_query($sql);

$_SESSION['metode'] = $metode;
$_SESSION['totAmount'] = $total;

if (@$_SESSION['insertPesanan'] != 'SAVED') {
	
	if ($metode == 'A') {
	//generate VA
	$va = '777'.substr(number_format(time() * mt_rand(),0,'',''),0,7);
	$sqlA = "INSERT into ng_order(order_session, order_va, order_total, order_paid, order_email, order_cara_pembayaran, order_member)
			VALUE('{$_SESSION['order_session']}', '{$va}', '{$total}', '0', '{$email}', '{$metode}', '{$member}')";
	$update = good_query($sqlA);
	
	echo "Pesanan anda berhasil tersimpan \n
		Silahkan lanjutkan ke tab menu pembayaran untuk melihat detail informasi pembayaran anda \n
		total = $total || va number: $va || email: $email";

	$_SESSION['insertPesanan'] = 'SAVED';

	}else{
	//metode CC
	$sqlA = "INSERT into ng_order(order_session, order_total, order_paid, order_email, order_cara_pembayaran,order_member)
			VALUE('{$_SESSION['order_session']}', '{$total}', '0', '{$email}', '{$metode}', '{$member}')";
	$insert = good_query($sqlA);
		if ($insert) {
			echo "Pesanan anda berhasil tersimpan \n
			Silahkan lanjutkan ke tab menu pembayaran untuk melakukan pembayaran via kartu kredit";
		}else{
			echo "Gagal menyimpan pembayaran CC anda \n
			Silahkan coba kembali";
		}
	}


}else{

	//kalo udah pernah ke insert, lakukan update
	if ($metode == 'A') {
		//generate VA
		$va = '777'.substr(number_format(time() * mt_rand(),0,'',''),0,7);

		$sqlU = "UPDATE ng_order SET order_va = '{$va}', order_total = '{$total}', order_paid = '0', order_email = '{$email}', order_cara_pembayaran = '{$metode}', order_member = '{$member}'
		where order_session = '{$_SESSION['order_session']}' ";
		$update = good_query($sqlU);

		if ($update) {
			echo "Perubahan metode pembayaran ATM berhasil disimpan \n
					Silahkan lanjutkan ke tab menu pembayaran untuk melihat detail informasi pembayaran anda";
		}else{
			echo "Gagal memperbaharui data pembayaran anda";
		}
		
	}else{
		$sqlU = "UPDATE ng_order SET order_va = NULL, order_total = '{$total}', order_paid = '0', order_email = '{$email}', order_cara_pembayaran = '{$metode}', order_member = '{$member}'
		where order_session = '{$_SESSION['order_session']}' ";
		$update = good_query($sqlU);

		echo "Perubahan metode pembayaran CC berhasil disimpan  \n
		Silahkan lanjutkan ke tab menu pembayaran untuk melihat detail informasi pembayaran anda";
	}
}


?>