<?php
$access_token = 'uv576+0eEdHpjEij7yScWHCDR97d5Gq9PjALN7ADEtQKt/oq2Xhto92KvwV5wgD3n17+g1fLcvgexO3U+vXH+UKmzd4moejn2cd8/AMC71QrKVi0ZvE5FOSDl6nZd/P+zlcQzjvrtUEpRYvEFSVjPAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
