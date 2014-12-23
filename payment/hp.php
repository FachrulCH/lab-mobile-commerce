<?php
    $hp = isset($_GET['no']) ? $_GET['no'] : '';
    $rp = isset($_GET['rp']) ? $_GET['rp'] : '';
    $otp = '1234';

	if ($rp<>'') {
		//include "config.php";
		//include "db_function.php";
		//$link = good_connect($dbhost,$dbuser,$dbpass,$dbname);
		//$query = "SELECT account,transaction,otp,balance FROM accounts WHERE mobile='{$hp}'";
		//list($acc,$transaction,$otp,$balance) = good_query_list($query);
		
		$text = "Anda baru saja melakukan transaksi sebesar Rp ".number_format($rp, 0, '', '.').",-. Masukkan password berikut ini dalam waktu kurang dari 5 menit ke depan:".$otp;;
	} else {
		$text = "Selamat datang di layanan UMB Bank. Lakukan transaksi online di banyak merchant yang ada dan kumpulkan poinnya.";
	}	
?>
<div id="outer" style="width:435px;">
<div id="outer" style="width:390px;height:690px;background-image:url('bb-umb.png');">
<div id="inner" style="color: #333333;font-family:Arial;font-size: small;padding-left: 55px;padding-top: 200px;width: 300px;">
<?php echo $text;?>
</div>
<div id="text" style="
	width: 200px;
    padding-left: 44px;
    padding-top: 90px;
    background-color: transparent;
"><input id="reply" type="text" style="border:0px;width:250px;" value="Press R to reply" onblur="document.getElementById('reply').value='Press R to reply';" onfocus="document.getElementById('reply').value='';"></div></div>