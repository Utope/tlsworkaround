<?php
//Send to salesforce
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://bseipp-sagetest.cs67.force.com/services/apexrest/Account/get",
    CURLOPT_SSLVERSION => 6,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_RETURNTRANSFER => true,
));


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}

//end sending

/*
//send to sage
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://bseipp-sagetest.cs67.force.com/services/apexrest/Account/get",
    CURLOPT_SSLVERSION => 6,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_RETURNTRANSFER => true,
));

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
*/