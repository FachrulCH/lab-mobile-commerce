<?php
include_once "db_function.php";
include_once "bank.php";

$cc 	   = isset($_POST['cc']) ? $_POST['cc'] : '';
$name 	 = isset($_POST['name']) ? $_POST['name'] : '';
$CCdate  = isset($_POST['expired']) ? $_POST['expired'] : '';
$convDate    = date('Y/m/d', strtotime($CCdate));
$amount  = isset($_POST['amount']) ? $_POST['amount'] : '';

$today    		= date('m/d/Y');
$effectiveDate  = strtotime("+1 months", strtotime($today));
$input    		=strtotime($CCdate);
$msg = "$input > $effectiveDate"; //for debug
$status = "tanggal expired harus > 30 hari kedepan ";
$transid = 0;

if ($input > $effectiveDate){
  //=== Cek no CC
  // return dari /payment/request.php => hardcode 111222333444
  $transid = bank_payment($cc, $name, $CCdate, $amount);
  $msg .= " trans id = ".@$transid; //=== msg buat debug

  if ($transid == $cc){
    //== Update database ng_order utk isi CC no dan tgl exp
    $sql = "UPDATE ng_order 
            SET order_cc_no = '{$cc}', order_cc_exp = '{$convDate}', order_cc_name = '{$name}' 
            where order_session = '{$_SESSION['order_session']}' ";
    $update = good_query($sql);

  	$status = "success";
  }else{
  	$status = "CC anda tidak valid";
  }

}


$json = array("status" => $status,
				"msg" => $msg,
				"transid" => $transid,
				"amount" => $amount);

echo json_encode($json);
?>