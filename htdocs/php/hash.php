<?php

include_once(dirname(__FILE__).'/S3.php');

function debug($obj)
{
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
}

$ini = parse_ini_file(dirname(dirname(dirname(__FILE__))).'/config.ini', true);
$aws = $ini['aws'];
$salts = $ini['salts'];
$addresses = $ini['addresses'];

$file = false;
$files = false;
if(isset($_FILES))
{
    $files = $_FILES;
}

$results = Array(
    'n' => false,
    's' => false,
    'h' => false,
    'addresses' => $addresses
);

if(isset($files['file'])) 
{
    $file = $files['file'];
    $name = $file['name'];
    $type = $file['type'];
    $bucket_name = 'bsuploads';
    $file_hash = md5_file($file['tmp_name']);
    $results = Array(
        'n' => $bucket_name.'/'.$name,
        's' => hash('sha256', $salts['file_hash'].$name),
        'h' => $file_hash,
        'addresses' => $addresses
    );
}

echo json_encode($results); exit;