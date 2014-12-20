<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function bank_payment($cc, $name, $expired, $amount) {
    //=== hardcode url file /payment/request.php
    $url = 'http://localhost:8080/lab-mobile-commerce/payment/request.php';
    $merchant_id = '78910';
    $api_key = '123456';
    $context = array('http' => array('method' => 'POST'));
    $params = array(
                'cc'=>$cc,
                'name'=>$name,
                'expired'=>$expired,
                'amount'=>$amount,
                'merchant_id'=>$merchant_id,
                'api_key'=>$api_key
            );
    $output = @file_get_contents($url,null,stream_context_create($context,$params));
    
    if (empty($output))  {
        return 0;
    } else {
        $response = json_decode($output,TRUE);
        return $response['payment']['transid'];
    }    
}

function bank_otp($transaction_id, $otp) {
    //$url = 'http://localhost/payment/otp.php';
    $url = 'http://192.168.142.1:8080/LabKampus/payment-2014-05-18/otp.php';
    $merchant_id = '78910';
    $api_key = '123456';
    $context = array('http' => array('method' => 'POST'));
    $params = array(
                'transid'=>$transaction_id,
                'otp'=>$otp,
                'merchant_id'=>$merchant_id,
                'api_key'=>$api_key
            );
    $output = @file_get_contents($url,null,stream_context_create($context,$params));

    if (empty($output))  {
        return 0;
    } else {
        $response = json_decode($output,TRUE);
        return $response['otp']['status'];
    }    
}

function bank_va($vanumber) {
    $result = '';
    if (is_numeric($vanumber)) {
        $query = "SELECT order_session name,order_va vanumber,order_total amount FROM ng_order WHERE order_va='".$vanumber."'";
        list($name,$vanumber,$amount) = good_query_list($query);
        if (!empty($name)) {
            $result = array(
                        'name'=>$name,
                        'vanumber'=>$vanumber,
                        'billamount'=>$amount);

            return $result;
        } else {
            return 0;
        }
    }
}