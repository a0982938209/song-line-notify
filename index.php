<?php

    include 'config.php';

    /* 設定config */
    $config = new config();
    $url = $config->url;
    $token = $config->token;

    $headers = array(
        "Content-Type: multipart/form-data",
        "Authorization: Bearer $token",
    );

    $message = array(
        'message' => 'your message'
    );

    $ch = curl_init();
    curl_setopt($ch , CURLOPT_URL , $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
    $result = curl_exec($ch);
    curl_close($ch);
?>