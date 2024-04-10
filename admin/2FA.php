<?php
include("config.php");
exec('bash src/2fa.sh ');
if (file_exists("QR") && is_readable("QR")) {
    
    $myfile = fopen("QR", "r");
    
    
    if ($myfile) {
       
        $data = fread($myfile, filesize("QR"));
        fclose($myfile); 
        $encoded_data = urlencode($data);
        $api = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . $encoded_data;

    } else {
        echo "Error opening QR file.";
    }
} else {
    echo "QR file not found or not readable.";
}
?>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>
    <center>
        <img src="<?php echo $api; ?>" width="150" height="150">
    </center>
    <form action="vf_otp.php" method="post">
        <label for="TOTP verify">ENTER YOUR OTP</label>
        <input type="text" name="OTP">
        <button type="submit">submit</button>
    </form>    
</body>

</html>