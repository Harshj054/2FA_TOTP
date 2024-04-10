<?php


// exec('curl -X POST "https://verify.twilio.com/v2/Services/VAe415d4f878686310c99212b634f0d55b/Entities/ff483d1ff591898a9942916050d2ca3f/Factors/YF02661684424185f3e2c6956dc2a6372d" \--data-urlencode "AuthPayload=$otp" \-u AC5f0d355a4ce8616348d32ef3e65c0ab9:387d4614baa402029a7cfdd2f4da9ff0 |tee res');
$otp = $_POST['OTP'];
exec("bash src/vf_otp.sh $otp");

$fileName = 'res'; // Replace with your actual filename

// Read the entire JSON file content
$jsonData = file_get_contents($fileName);

// Decode the JSON into an associative array
$dataArray = json_decode($jsonData, true);

// Extract the value of the "status" key
$statusValue = $dataArray['status'];

echo "$statusValue";
if ($statusValue =="verified")
{
    echo '<script>alert("verification successful");location.replace(document.referrer);</script>';
}else{
    echo '<script>alert("verification un-successful");location.replace(document.referrer);</script>';
}
?>