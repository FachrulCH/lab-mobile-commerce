<?php

/* 
 * Copyright (C) 2014 rinto.priambodo
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

//include 'bootstrap.php';
include 'model/bank.php';
include_once "model/db_function.php";

$hash = isset($_POST['hash']) ? $_POST['hash'] : '';
$vanumber = isset($_POST['vanumber']) ? $_POST['vanumber'] : '';
$trxid = isset($_POST['trxid']) ? $_POST['trxid'] : '';
$timestamp = isset($_POST['timestamp']) ? $_POST['timestamp'] : '';

$salt = ((substr($vanumber,4,1)&substr($vanumber,5,1))&(substr($vanumber,14,1)&substr($vanumber,15,1)))%7;
$params = strtoupper("vanumber={$vanumber}&trxid={$trxid}&timestamp={$timestamp}&{$salt}");
$hashchk = md5($params); //bc014a6b00139a4748dd348f33c8ede9

// Check if VA number valid
// Return SELECT order_session name,order_va vanumber,order_total amount FROM ng_order
$va = bank_va($vanumber);

if ($va<>0 && $hash==$hashchk) {
    //$name = $va['name'];//'JOHN';
    $name = 'Naikgunung.com';
    $billamount = $va['billamount'];//'200000';
    $trxref = uniqid('umb');
    
    $params = array($vanumber, '00', $trxid, $name, $billamount, $trxref);
} else {
    $params = array($vanumber, '99', $trxid, 'ERROR');
    //error_log("ERROR:trxid={$trxid};timestamp={$timestamp};vanumber={$vanumber};\n",3);
}
echo implode('|', $params);