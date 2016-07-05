<?php

function getUserData($name){
    $userpath = "./users/".$name.".user";
    $content = file_get_contents($userpath);
    $ret = false;
    if($content) {
        $ret = array();
        $split = explode("\n", $content);
        foreach(array("pw","username","email") as $key => $value){
            $ret[$value] = isset($split[$key]) ? $split[$key] : "";
        }
    }
    
    return $ret;
}

function deleteComment($comment_name) {
    $img_arr = glob("./uploads/*");
    $img_path = false;
    foreach($img_arr as $img) {
        $key = pathinfo($img, PATHINFO_FILENAME);
        if($key === $comment_name) {
            $img_path = $img;
        }
    }

    $paths =  array(
        $img_path,
        "./comments/".$comment_name.".comment",
        "./imgdescr/".$comment_name.".imgdescr",
    );

    foreach ($paths as $path){
        if(file_exists($path)) {
            unlink($path);
        }
    }
}

function deleteUsersComments($username) {
    $comments = glob("./comments/*.comment");
    
    foreach ($comments as $comment) {
        $comment_name = pathinfo($comment, PATHINFO_FILENAME);
        $usermatch = $username."-";
            
        if(strpos($comment_name, $usermatch) === 0) {
            deleteComment($comment_name);
        }
    }
}

