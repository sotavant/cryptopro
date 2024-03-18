<?php

require_once dirname(__FILE__, 2) . '/vendor/autoload.php';

$cleanString = preg_replace([
    '/\s/',
    '/\+/',
    '/\//',
    '/=/',
], [
    '',
    '-',
    '_',
    '',
], file_get_contents('sign.txt'));
file_put_contents("sign_clean.txt", $cleanString);