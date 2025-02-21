<?php

include('../lib/full/qrlib.php');

// outputs image as PNG base64 string
$qr_base64 = QRcode::pngBase64('PHP QR Code :)');

// displaying the QR code as an image
echo '<img src="'.$qr_base64.'" />';