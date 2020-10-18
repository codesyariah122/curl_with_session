<?php
function Menu($url){
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    $result = curl_exec($data);
    curl_close($data);
    return $result;
}
