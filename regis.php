<?php

session_start();
if (isset($_SESSION['user'])!="")
 {
    header("Location:home.php");
  }

  include_once 'sqlconnect.php';

  if (isset($_POST['btn-signup']))
    {

       $username=$_POST['username'];
       $password=$_POST['password'];

       if (mysql_query("INSERT INTO users(username,password)VALUES('$username','$password')"))
       {
          echo 'registered successfully';

        }
        else
          {

            echo 'unable to register';

          }


    }
    ?>

    <!DOCTYPE html>
    <head>
    <body>
    <center>
    <h1><strong>REGISTRATION PAGE</strong></h1>
    <form method="post";
    <table> <align="center" width="30%" border="0"></table>
    <tr>
    <td><input type="text" name="username" placeholder="UserName" required/></td>
    </tr>
    <tr>
    <td><input type="text" name="password" placeholder="Password" required/></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-signup">Sign me up</button></td>
    </tr>
    <tr>
    <td><a href="index.php">Sign in</a></td>
    </tr>
    </form>
   </center>
    </body>
    </head>



