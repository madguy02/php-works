
<?php
$url = 'http://www.google.com';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

var_dump($info)

?>