<style> input {	background-color:#0000ff; border-bottom:solid 1px #cccccc; border-top:0px; border-right:0px; border-left:0px; color:#cccccc; }</style>
<div id="outer" style="width:435px;"><div id="outer" style="width:435px;height:400px;background-image:url('diebold-cropped.png');"><div id="inner" style="color:#cccccc;font-family:Arial;font-size: small;padding-left: 100px;padding-top: 50px; width: 250px;">
<br/>
<?php
    $acc = isset($_POST['no']) ? $_POST['no'] : '';
    $vanumber = isset($_POST['vanumber']) ? $_POST['vanumber'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
    $trxid = isset($_POST['trxid']) ? $_POST['trxid'] : '';
    $trxref = isset($_POST['trxref']) ? $_POST['trxref'] : '';

	//bank_payment
	//if success
	//deduct balance

	//include "config.php";
	//include "db_function.php";
	include_once "../model/db_function.php";

	//$link = good_connect($dbhost,$dbuser,$dbpass,$dbname);

	$merchant_id = substr($vanumber,0,3);

	// Ambil link halaman pembayaran
	// http://localhost:8080/naikgunung/bank_payment.php
	$query = "SELECT id,url_payment FROM merchants WHERE id={$merchant_id}";
	list($merchant_id,$url_payment) = good_query_list($query);
	
	$trxid = uniqid('umb');
	$timestamp = date('YYmmddHis');
	$salt = ((substr($vanumber,4,1)&substr($vanumber,5,1))&(substr($vanumber,14,1)&substr($vanumber,15,1)))%7;
	$params = strtoupper("vanumber={$vanumber}&trxid={$trxid}&timestamp={$timestamp}&{$salt}");
	$hash = md5($params);

    $url = $url_payment;
    $params = http_build_query(
			array(
                'hash'=>$hash,
                'vanumber'=>$vanumber,
                'trxid'=>$trxid,
                'timestamp'=>$timestamp,
                'trxref'=>$trxref,
                'amount'=>$amount
            )
			);
    $context = array('http' => array(
								'method' => 'POST',
								'header' => 'Content-type: application/x-www-form-urlencoded',
								'content' => $params));
    $output = @file_get_contents($url,false,stream_context_create($context));

    if (empty($output))  {
        $response = 0;
    } else {
        $response = explode('|',$output);
		$resp_code= $response[1];
		if ($resp_code=='00') {
			$vanumber_resp = $response[0];
			$trxid = $response[2];
			$description = $response[3];
			
			$sqlStatus = "UPDATE ng_order SET order_paid = '1' where order_va ='{$vanumber_resp}' ";
			$updateStatus = good_query($sqlStatus);
			if ($updateStatus == true){
				echo "<div>TRANSAKSI BERHASIL</div>";
				echo "<div>Ref no :".$trxid."</div>";
				echo "<div>Harap simpan nomor referensi di atas sebagai bukti pembayaran</div>
						<p>$response[4]</p> <p>$response[5]</p>";	
			}
			
		} else {
			echo 'TRANSAKSI GAGAL<br/>';
			echo '<br/>';
			echo '<input type="button" onclick="history.back();" value="Kembali"/>';
		}
    }    
?>
</div></div>