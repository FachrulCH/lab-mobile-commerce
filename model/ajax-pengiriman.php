<?php
$email 		= $_POST['email'];
$nama 		= $_POST['nama'];
$hp			= $_POST['noHP'];
$alamat		= $_POST['alamat'];
$zip		= $_POST['kodepos'];
$catatan 	= $_POST['catatan']; 

//--- Validasi data tidak boleh kosong
if ($email == '' || $nama == '' || $hp == '' || $alamat == '' || $zip == ''){
	echo "Data anda gagal tersimpan, Harap isi data dengan lengkap";
}else{
	include_once "db_function.php";
	$sql = "UPDATE ng_order_tmp SET order_email = '{$email}', order_nama_pembeli = '{$nama}', order_hp = '{$hp}', order_alamat = '{$alamat}', order_zip = '{$zip}', order_catatan = '{$catatan}' where order_session = '{$_SESSION['order_session']}' ";
	$update = good_query($sql);
	if($update == true){
		echo "Data $nama berhasil tersimpan,</p><p> silahkan menuju tab konfirmasi";
	}else{
		echo "Data error".mysql_error(mysql_info());
	}
}

//echo "Data berhasil disimpan";
?>