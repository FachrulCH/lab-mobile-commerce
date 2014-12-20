<?php
include_once "../model/db_function.php";
//echo "bershasil coy $a";
@$email 		= $_GET['email'];
@$namalengkap 	= $_GET['namalengkap'];
@$noHP 			= $_GET['noHP'];
@$pinBB			= $_GET['pinBB'];
@$alamat		= $_GET['alamat'];
@$zip			= $_GET['zip'];
@$pswd			= trim($_GET['password']);

$sql = "insert into ng_member(email,nama_lengkap,nohp,pinbb,alamat,kodepos,password) 
values ('".$email."','".$namalengkap."','".$noHP."','".$pinBB."','".$alamat."','".$zip."',md5('".$pswd."'))";
$insert = good_query($sql);
header('location:../login.php#berhasildaftar');
?>
