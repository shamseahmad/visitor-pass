<?php
if(isset($_POST['photoStore'])) {
    $encoded_data = $_POST['photoStore'];
    $binary_data = base64_decode($encoded_data);
    $ida = "temp";
    $photoname = $ida.'.jpeg';
    // to gen unique id use "uniqid()"

    $result = file_put_contents('uploadPhoto/'.$photoname, $binary_data);
    echo 'success';
}