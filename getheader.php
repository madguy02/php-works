<?php
function http_header($url)
{
	$initialize=curl_init($url);
	curl_setopt($initialize,CURLOPT_RETURNTRANSFER,TRUE);
	$contents=curl_exec($initialize);
	$header=curl_getinfo($initialize,CURLINFO_HTTP_CODE);
	curl_close($initialize);
	return $header;

}

$addr=$_POST["http://www.hackerearth.com"];
$header=http_header($addr);
echo "<b>HTTP HEADER:</b> $header" . " " . "cool";

?>