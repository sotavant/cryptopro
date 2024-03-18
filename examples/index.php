<?php

require_once dirname(__FILE__, 2) . '/vendor/autoload.php';

$hash = base64_encode("cc8a5c18-1e20-4b87-8caf-d3acea1a5d71");
$pass = "1234567890";
$certThumbprint = "31429D5BDFBB5519E1D7D74FE6B789BB525EFA92";

try {
    $signature = Webmasterskaya\CryptoPro\CryptoPro::createDetachedSignature($certThumbprint, $hash, $pass);
    dump($signature);
} catch (Exception $e) {
    dump($e);
}