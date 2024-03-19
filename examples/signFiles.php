<?php

require_once dirname(__FILE__, 2) . '/vendor/autoload.php';

$files = [
    "file.pdf",
    "req.xml",
];

$pass = "1234567890";
$certThumbprint = "31429d5bdfbb5519e1d7d74fe6b789bb525efa92";

try {
    foreach ($files as $file) {
        $hash = \Webmasterskaya\CryptoPro\CryptoPro::createHash(file_get_contents($file));
        $signature = Webmasterskaya\CryptoPro\CryptoPro::createDetachedSignature($certThumbprint, $hash, $pass);
        file_put_contents($file . '.sig', $signature);
    }
} catch (Exception $e) {
    dump($e);
}