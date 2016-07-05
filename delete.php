<?php
include './includes/functions.inc';
session_start();
$currentUser = $_SESSION["username"];
$comment_name = $_GET["c"];
if(strpos($comment_name, $currentUser) === 0){
    deleteComment($comment_name);
}

header('Location: /badapp');