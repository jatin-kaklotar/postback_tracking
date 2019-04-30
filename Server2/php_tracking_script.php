<?php
ini_set('display_errors', 1);
require_once "../config.php";
if ($_POST) {
    $requestArray = [
        'time' => date('Y-m-d H:i:s'),
        'h1' => $_POST['heading1'],
        'page' => $_POST['page'],
    ];
    $ch = curl_init($serverUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $requestArray);
    $response = curl_exec($ch);
    curl_close($ch);
    if ($response) {
        echo $response;
    } else {
        echo false;
    }
} else {
    echo false;
}
