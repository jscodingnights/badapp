<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$data =  array();

$data["userip"] = $_SERVER["REMOTE_ADDR"];
$data["timestamp"] = time();
$data["get"] = $_GET;
$json = json_encode($data);


file_put_contents("./data/".time().".data", $json, LOCK_EX);

header('Content-Type: image/gif');
echo base64_decode("R0lGODdhAQABAIAAAPxqbAAAACwAAAAAAQABAAACAkQBADs=");