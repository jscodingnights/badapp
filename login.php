<?php  
   include './includes/functions.inc';
   session_start();
   $user = $_POST["username"];
   $pw = md5($_POST["password"]); 
   
   if(!empty($user) && !empty($pw)){
       
       $userData = getUserData($user);
  
       $pwUser = $userData["pw"];
       if($pw === $pwUser) {
           $_SESSION["username"] = $user;
           setcookie("username", $user);
       }
   }
   
   header('Location: /badapp');


