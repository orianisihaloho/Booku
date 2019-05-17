<?php
	include 'data.php';
	$total = $_POST['bayar'];

	$data['amount'] =  $total;
	$data['code'] = uniqid("BOOKU");
	$json_encode = json_encode($data);


	$url ='https://sigurita.com/sikilat/account/payment?data='.$json_encode;

	$client = curl_init($url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($client);


	header("location:$url");

?>