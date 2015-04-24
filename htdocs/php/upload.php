<?php

include_once(dirname(__FILE__).'/S3.php');

function debug($obj)
{
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
}

$ini = parse_ini_file(dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/config.ini', true);

$file = false;
$files = false;
if(isset($_FILES))
{
    $files = $_FILES;
}

if(isset($files['file'])) 
{
    $file = $files['file'];
    $name = $file['name'];
    $type = $file['type'];
    $bucket_name = 'bsuploads';
    $file_hash = md5_file($file['tmp_name']);
    $obj = Array(
        'n' => $bucket_name.'/'.$name,
        'h' => $file_hash
    );
    echo $hashed_contents;
}
