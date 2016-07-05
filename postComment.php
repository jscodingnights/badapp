<?php
    session_start();
    $title = htmlspecialchars($_POST["title"]);
    
    //die();
    $text = strip_tags($_POST["text"], "<b><i>"); // remove all tags except b
    $user = isset($_SESSION["username"]) ? $_SESSION["username"] : "Guest";
    $description = $_POST["imgdescr"];
 
    $comments = glob("./comments/*.comment");
    $size = sizeof($comments) + 1;
    
    $_SESSION["size"] = $size;
    $comment_name = $user."-comment".$size;
    file_put_contents("./comments/".$comment_name.".comment", "<h4>".$title."</h4><p>".$text."</p>", LOCK_EX);
    file_put_contents("./imgdescr/".$comment_name.".imgdescr", $description, LOCK_EX);
    $uploaddir = './uploads/';
    $ext = pathinfo(basename($_FILES['userfile']['name']), PATHINFO_EXTENSION);
    if($ext !== "php" && $ext !== "exe") {
        $uploadfile = $uploaddir . $comment_name.".".$ext;
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
    }
    header('Location: /badapp');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change th$is template file, choose Tools | Templates
 * and open the template in the editor.
 */

