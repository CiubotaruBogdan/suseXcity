    <?php 
	
	function sendSMS ($sms) {
  $username = "udf34412ace85da5562b4ceda183b44c5";
  $password = "CDF8252B5230D3F8EBFDDBC0338764FD";
  $context = stream_context_create(array(
    'http' => array(
      'method' => 'POST',
      'header'  => 'Authorization: Basic '.
                  base64_encode($username.':'.$password). "\r\n".
                  "Content-type: application/x-www-form-urlencoded\r\n",
      'content' => http_build_query($sms),
      'timeout' => 10
  )));
  $response = file_get_contents("https://api.46elks.com/a1/sms",
    false, $context);

  if (!strstr($http_response_header[0],"200 OK"))
    return $http_response_header[0];
  return $response;
}
$sms = array(
  "from" => "IoTHUB1",   /* Can be up to 11 alphanumeric characters */
  "to" => "+40749268258",  /* The mobile number you want to send to */
  "message" => "The IoT GPRS/GSM module no #1 with Globetel network carrier is working properly (signal level: 4)",
);
echo sendSMS($sms);
  
  ?>