
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.google.com/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$content = curl_exec($ch);
$real_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
curl_close($ch);
var_dump($real_url); 
$host = parse_url($real_url, PHP_URL_HOST);
var_dump($host); 
$ip = gethostbyname($host);
var_dump($ip);

?>