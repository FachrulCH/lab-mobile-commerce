<?php
    $transid = isset($_POST['transid']) ? $_POST['transid'] : '';
    $otp = isset($_POST['otp']) ? $_POST['otp'] : '';
    $merchant_id = isset($_POST['merchantid']) ? $_POST['merchantid'] : '';
    $api_key = isset($_POST['apikey']) ? $_POST['apikey'] : '';

    echo ''
    . '{
                "otp": {
                        "transid": "301298347123450928354",
                        "merchantid": "'.$merchant_id.'",
                        "status": "1",
                        "timestamp": "'.date("YYmmddHis").'"
                }
        }';
?>