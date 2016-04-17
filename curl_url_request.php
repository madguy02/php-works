<html>
<head>
<style type="text/css">
body {background-color:#d0e4fe;}
h3{color:red;text-align:center;}
p {color:blue;}
</style>
<title> SEO SPIDER </title>
</head>
<body>

<?php 
$webaddress = $_POST["http://hackerearth.com"];
echo "<h3> Page details of the URL : $webaddress</h3>";
echo "<br/><br/>";
?>
<?php include("getmeta.php"); ?>
<?php include("getheader.php"); ?>
<?php include("gettitle.php"); ?>
<?php include("ipaddress.php"); ?>
<?php include("serverip.php"); ?>
<?php include("httpstatus.php"); ?>
<?php include("newheader.php"); ?>

</body>
</html>