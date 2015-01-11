<?php
include_once "db_function.php";
$id 		= $_GET['order_id'];
$session 	= getSession();
$warna		= cekNull(@$_GET['warna']);
$ukuran		= cekNull(@$_GET['ukuran']);
$jumlah		= cekNull(@$_GET['jumlah']);


if (@$_GET['do'] == 'delete') {
	/*echo "proses DELETE id = $id";*/
	$delete = hapusKeranjang($session, $id);

	if ($delete){
		echo "	<script type=\"text/javascript\">
					alert('Berhasil di hapus');
					 window.location = '../keranjang-checkout.php';
				</script>";
	}else{
		echo "	<script type=\"text/javascript\">
					alert('Kegagalan dlm menghapus data');
					 window.location = '../keranjang-checkout.php';
				</script>";
	}

}else{
	/*echo "proses update";*/
	$update = updateKeranjang($session, $id, $warna, $ukuran, $jumlah);

	if ($update){
		echo "	<script type=\"text/javascript\">
					alert('Berhasil di update');
					 window.location = '../keranjang-checkout.php';
				</script>";
	}else{
		echo "	<script type=\"text/javascript\">
					alert('Gagal diupdate');
					 window.location = '../keranjang-checkout.php';
				</script>";
	}
}

?>
