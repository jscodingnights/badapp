<?php
include './includes/functions.inc';
session_start();
$currentUser = $_SESSION["username"];


$path = "./users/".$currentUser.".user";

if(file_exists($path)) {
    unlink($path);
}

deleteUsersComments($currentUser);


session_destroy();

header('Location: /badapp/logout.php');
