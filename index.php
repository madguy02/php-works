<?php
session_start();
include_once 'sqlconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE username='$username'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: home.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>

<!DOCTYPE html>
<head>
<body>
<center>
<h1><strong>LOGIN PAGE</strong></h1>
<form method="post">
<table> <align="center" width="30%" border="0"></table>
<tr>
<td><input type="text" name="username" placeholder="UserName" required/></td>
</tr>
<tr>
<td><input type="text" name="password" placeholder="Password" required/></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">SignIn</button></td>
</tr>
<tr>
<td><a href="regis.php"</a></td>
</tr>
</form>
</center>
</body>
</html>


