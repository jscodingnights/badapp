<?php
    include './includes/functions.inc';
    session_start();
    
    $user = $_SESSION["username"];
    $userData = getUserData($user);
    
    
   
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/base-min.css">
        <meta charset="UTF-8">
        <title>Vulnerable Webapp | Profile</title>
    </head>
    <body style="padding: 45px; max-width: 500px;">
       
        <h1>Your data, <?php print $user ?></h1>
       
        <p>
            <address>
                <?php print $userData["username"] . "<br />" . $userData["email"]; ?>
        
            </address>
         
            <a href="deleteUser.php" onclick="return confirm('Oh really ?')">Delete Account</a>
        </p>
        
    </body>
</html>

