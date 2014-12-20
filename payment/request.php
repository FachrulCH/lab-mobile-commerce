<?php
    $cc = isset($_POST['cc']) ? $_POST['cc'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $expired = isset($_POST['expired']) ? $_POST['expired'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
    $merchant_id = isset($_POST['merchantid']) ? $_POST['merchantid'] : '';
    $api_key = isset($_POST['apikey']) ? $_POST['apikey'] : '';

    echo ''
    . '{
                "payment": {
                        "transid": "301298347123450928354",
                        "cc": "'.$cc.'",
                        "name": "'.$name.'",
                        "expired": "'.$expired.'",
                        "merchantid": "'.$merchant_id.'",
                        "amount": "'.$amount.'",
                        "status": "1",
                        "timestamp": "'.date("YYmmddHis").'"
                }
        }';
?>