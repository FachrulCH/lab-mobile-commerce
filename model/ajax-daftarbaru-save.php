<?php
include_once "../model/db_function.php";
//echo "bershasil coy $a";
@$email 		= $_POST['email'];
@$namalengkap 	= $_POST['namalengkap'];
@$noHP 			= $_POST['noHP'];
@$pinBB			= $_POST['pinBB'];
@$alamat		= $_POST['alamat'];
@$zip			= $_POST['zip'];
@$pswd			= trim($_POST['password']);

$sql = "INSERT into ng_member(email,nama_lengkap,nohp,pinbb,alamat,kodepos,password) 
		values ('".$email."','".$namalengkap."','".$noHP."','".$pinBB."','".$alamat."','".$zip."',md5('".$pswd."'))";
$insert = good_query($sql);
//header('location:../login.php#berhasildaftar');

if ($insert) {
	$hasil = array('status' => 'sukses', 'msg' => 'Data anda berhasil didaftarkan, silahkan melakukan login');
}else{
	$hasil = array('status' => 'gagal', 'msg' => 'Gagal save data silahkan coba lagi');
}
echo json_encode($hasil);
?>
