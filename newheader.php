
<?php
$url = 'http://www.flipkart.com';

print_r(get_headers($url));

print_r(get_headers($url, 1));
?>
