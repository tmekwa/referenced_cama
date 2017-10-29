<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    //$reg_username = $POST['reg_username'];
    //$reg_password = $POST['reg_password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    //$reg_username = stripcslashes($reg_username);
    //$reg_password = stripcslashes($reg_password);

//$reg_username= mysql_real_escape_string($reg_username);
  //  $reg_password = mysql_real_escape_string($reg_password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    mysql_connect("localhost", "root", "Tumisho45");
    mysql_select_db("login");

    $result = mysql_query("SELECT * fROM users WHERE username = '$username' AND password = '$password' ")
                or die("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password) 
    {
        echo "Login Success!! Welcome ".$row["username"];
        header("location: gallery.php");
    }else
    {
        echo "Failed to Login!!";
    }

?>