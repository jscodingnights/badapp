<?php
    session_start();
    $isLoggedIn = isset($_SESSION["username"]);
    if($isLoggedIn){
        $user = $_SESSION["username"];
        setcookie("numOfVisits", "77");
        setcookie("searchPhrase", "car insurance renault");
    } else {
        $user = isset($_GET["username"]) ? $_GET["username"] : "";
    }
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
        <title>Vulnerable Webapp</title>
    </head>
    <body style="padding: 45px; max-width: 500px;">

        <h1>Vulnerable Webapp</h1>
        <p>
            <?php if($isLoggedIn): ?>
            <h3>Welcome <?php print $user ?>. Please leave a comment!</h3><br />
            <a href="logout.php">Logout</a> | <a href="profile.php">Profile</a><br /> <br />
            <?php  include 'includes/commentForm.inc' ?>
            <br />
            <?php include 'includes/comments.inc' ?>
            
            <?php else : ?>
            <h2>Hello <?php print htmlspecialchars($user) ?></h2>
            <h3>Please Login or <a href="register.php">register</a></h3>
                <form method="post" action="login.php">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php print $user ?>" />
                    <br />
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                    <a href="index.php"></a>
                    <br />
                    <input type="submit" value="Login" />
                </form>
                <p>Latest comments:</p>
                <?php include 'includes/comments.inc' ?>
            <?php endif;?>
             
        </p>
 
    </body>
</html>
