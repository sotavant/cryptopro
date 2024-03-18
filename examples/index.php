<?php

require_once dirname(__FILE__, 2) . '/vendor/autoload.php';

$string = "cc8a5c18-1e20-4b87-8caf-d3acea1a5d71";
$pass = "1234567890";
$certThumbprint = "31429d5bdfbb5519e1d7d74fe6b789bb525efa92";

try {
    $hash = \Webmasterskaya\CryptoPro\CryptoPro::createHash($string);
    $signature = Webmasterskaya\CryptoPro\CryptoPro::createDetachedSignature($certThumbprint, $hash, $pass);
    dump($signature);
} catch (Exception $e) {
    dump($e);
}