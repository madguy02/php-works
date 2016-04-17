<?php 
function http_loadtime($url)
{
   $initialize=curl_init($url);
   curl_setopt($initialize,CURLOPT_RETURNTRANSFER,TRUE);
   $contents=curl_exec($initialize);
   $load=curl_getinfo($initialize,CURLINFO_TOTAL_TIME);
   curl_close($initialize);
   return $load;

}

$address=$_POST["http://www.srmmun.in/"];
$load=http_loadtime($address);
echo "<br/><br/>";
echo "<b>URL Load Time:</b> $loadtime" . " " . "Seconds";
echo "<br/>";

?>