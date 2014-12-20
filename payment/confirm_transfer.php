<style> input {	background-color:#0000ff; border-bottom:solid 1px #cccccc; border-top:0px; border-right:0px; border-left:0px; color:#cccccc; }</style>
<div id="outer" style="width:435px;"><div id="outer" style="width:435px;height:400px;background-image:url('diebold-cropped.png');"><div id="inner" style="color:#cccccc;font-family:Arial;font-size: small;padding-left: 100px;padding-top: 50px; width: 250px;">
<?php
    $acc = isset($_POST['acc']) ? $_POST['acc'] : '';
    $vanumber = isset($_POST['vanumber']) ? $_POST['vanumber'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';

	include "../model/db_function.php";

	// Ngambil saldo no rekening
	$query = "SELECT account,balance FROM accounts WHERE account={$acc}";
	list($acc,$balance) = good_query_list($query);

	// ambil Nama Merchant VA dari no VA yg diinput ATM
	// $merchant_id = substr($vanumber,0,1);
	$merchant_id = substr($vanumber, 0, 3);  // returns 777 (id naikgunung)
	
	// Ambil link halaman pembayaran
	// http://localhost:8080/naikgunung/bank_inquiry.php
	$query = "SELECT id,url_inquiry FROM merchants WHERE id={$merchant_id}";
	list($merchant_id,$url_inquiry) = good_query_list($query);
	
	$trxid = uniqid('umb');
	$timestamp = date('YYmmddHis');
	$salt = ((substr($vanumber,4,1)&substr($vanumber,5,1))&(substr($vanumber,14,1)&substr($vanumber,15,1)))%7;
	$params = strtoupper("vanumber={$vanumber}&trxid={$trxid}&timestamp={$timestamp}&{$salt}");
	$hash = md5($params);

    $url = $url_inquiry;
    $params = http_build_query(
			array(
                'hash'=>$hash,
                'vanumber'=>$vanumber,
                'trxid'=>$trxid,
                'timestamp'=>$timestamp
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
			$name = $response[3];
			$billamount = $response[4];
			$trxref = $response[5];
			?>
			<form action="submit_transfer.php" method="post">
			<h2>Konfirmasi Transfer</h2>
			<div>
			<?php 
			echo "Nama: ".$name."<br/>";
			$billamounttxt = "Rp ".number_format($billamount, 0, '', '.').",-";
			echo "Jumlah: ".$billamounttxt."<br/>";
			?>
			<input type="hidden" name="acc" id="acc" value="<?php echo $acc;?>"/>
			<input type="hidden" name="vanumber" id="vanumber" value="<?php echo $vanumber_resp;?>"/>
			<input type="hidden" name="amount" id="amount" value="<?php echo $billamount;?>"/>
			<input type="hidden" name="trxid" id="trxid" value="<?php echo $trxid;?>"/>
			<input type="hidden" name="trxref" id="trxref" value="<?php echo $trxref;?>"/>
			<br/>Kirim? <br/>
			&gt;<input type="submit" value="Ya" style="color:#cccccc; border:0px;"/>
			</div>
			</form>
			<?php
		} else {
			?>
			<h2>Konfirmasi Transfer</h2>
			<div>
			Nomor VA tidak valid!<br/>
			<br/>
			<input type="button" onclick="history.back();" value="Kembali" style="color:#cccccc; border:0px;"/>
			</div>
			<?php
		}
    }    
?></div></div>