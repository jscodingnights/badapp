<?php

?>

<!DOCTYPE html>


<html>
    <head>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/base-min.css">
        <meta charset="UTF-8">
        <title>Vulnerable Webapp | Register</title>
    </head>
    <body style="padding: 45px; max-width: 500px;">
       
        <h1>Register</h1>
       
        <form method="post" action="postRegister.php">
            <label for="username">Username</label> <input type="text" name="username" id="username" /><br />
            <label for="password">Password</label> <input type="password" name="password" id="password" /><br />
            <label for="email">E-mail</label> <input type="text" name="email" id="email" /><br />
            <input type="submit" value="Register" />
        </form>
        
    </body>
</html>



