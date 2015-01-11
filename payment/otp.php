<?php
    $transid = isset($_POST['transid']) ? $_POST['transid'] : '';
    $otp = isset($_POST['otp']) ? $_POST['otp'] : '';
    $merchant_id = isset($_POST['merchantid']) ? $_POST['merchantid'] : '';
    $api_key = isset($_POST['apikey']) ? $_POST['apikey'] : '';
    
if ($otp == 1234) {
    
    echo ''
    . '{
                "otp": {
                        "transid": "301298347123450928354",
                        "merchantid": "'.$merchant_id.'",
                        "status": "1",
                        "timestamp": "'.date("YYmmddHis").'"
                }
        }';
}else{
    echo '{
                "otp": {
                        "transid": "'.$otp.'",
                        "merchantid": "Gagal",
                        "status": "0",
                        "timestamp": ""
                }
        }'; 
        //== status 0 untuk bank.php karena OTP salah
        //    print_r($_POST);
}
?>