<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Verify OTP
 * 1. Get user_id
 * 2. Get transaction_id
 * 3. Get otp
 * 4. Request OTP check
 * 5. Receive response from bank (approval)
 * 6. Get order_id
 * 7. Find Order where order_id=order_id and user_id=user_id
 * 8. Set status=3 (paid)
 * 9. Redirect to order.php
 */

//include 'bootstrap.php';
//include 'model/order.php';
include_once 'model/db_function.php';
include_once 'model/bank.php';

//$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
$user_id = 'Hardcode';

if ($user_id=='') {
   //header('Location:login.php');
    $balikan = 9;//array('status' => 0);
        echo $balikan ; //echo json_decode($balikan);
} else {
    $order_id = isset($_POST['order_id']) ? $_POST['order_id'] : '';
    $transaction_id = isset($_POST['transaction_id']) ? $_POST['transaction_id'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
    $otp = isset($_POST['otp']) ? $_POST['otp'] : '';
    
    //$request = bank_otp($transaction_id, $otp);
    $request = bank_otp($transaction_id, $otp);
    //== Remark #1 kondisi, karena pengecekan berhasil tidaknya udah ada di status pd bank.php
    //#1 if ($request != 0) {
        //== return 1 => Sukses
        //== Update flag paidnya

        /*$data = array(
                    'id'=>$order_id,
                    'amount'=>$amount,
                    'order_status'=>'3'
                );
        $update = order_update($data);
        if ($update != 0) {
            header('Location:order.php');
        }*/
        //$balikan = 1;// array('status' => 1);
        echo $request ; //echo json_decode($balikan);
    //#1 } else {
        //$balikan = 0;//array('status' => 0);
    //#1    echo $request ; //echo json_decode($balikan);
    //#1 }
}