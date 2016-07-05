<?php
session_start();
$username = htmlspecialchars($_POST["username"]);

$password = md5($_POST["password"]);
$email = $_POST["email"];

$userpath = "./users/".$username.".user";

if(!file_exists($userpath)) {
    $content = $password."\n".$username."\n".$email;
    file_put_contents($userpath, $content);
    $_SESSION["username"] = $username;
    setcookie("username", $user);
}

 header('Location: /badapp');

