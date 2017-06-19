<?php
//Send to salesforce
$curl = curl_init();

$sObjectType = $_GET['sObjectType'];

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://bseipp-sagetest.cs67.force.com/services/apexrest/RestController/get?sObjectType=" . $sObjectType,
    CURLOPT_SSLVERSION => 6,
    CURLOPT_RETURNTRANSFER => true
));


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    return "cURL Error #:" . $err;
} else {
    return $response;
}