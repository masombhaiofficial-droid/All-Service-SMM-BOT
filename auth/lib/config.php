<?php

$upiuid = "paytm.s18vj04@pty";

$token = '491283-0c4fbf-191415-8929a9-d9aba7'; 

$secret = 'gK7PQgcMZs'; 

$UPBPAY_ENVIRONMENT = 'PROD';

$UPBPAY_TXN_URL='https://paytm.legendpay.in.net/order/paytm';
$UPBPAY_STATUS_URL='https://paytm.legendpay.in.net/status_paytm';
if($UPBPAY_ENVIRONMENT == 'PROD') {
$UPBPAY_TXN_URL='https://paytm.legendpay.in.net/order/paytm';	
$UPBPAY_TXN_URL='https://paytm.legendpay.in.net/order/paytm';	

}
?>