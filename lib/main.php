<?php

function get_url($url){
    $res = curl_init($url);
    $timeout = 3;

    // Force curl to fetch fresh data (no-cache)
    curl_setopt($res, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($res, CURLOPT_CONNECTTIMEOUT, $timeout); 

    $data = curl_exec($res);
    curl_close($res);

    return $data;
}

?>
