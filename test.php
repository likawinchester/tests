<?php
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://kit76.ru/junior.php');
	curl_setopt($ch, CURLOPT_POST, 1);  
	
	$data = array(
		"Password" => "5JK87G3A",
		"MerID" => "400000000003295",
		"AcqID" => "433212",
		"OrderId" => "1355",
		"PurchaseAmount" => "000000018000",
		"PurchaseCurrency" => "643"
		);
	$query = http_build_query($data);
	$collect = implode($data);
	$signature = base64_encode($collect);
	$query .= '&signature='.$signature;
	
	curl_setopt($ch, CURLOPT_POSTFIELDS, $collect);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$output = curl_exec($ch);
	curl_close($ch);
	echo $output;  
?>
