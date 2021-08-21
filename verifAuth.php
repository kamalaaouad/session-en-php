<?php

if(isset($_POST["login"]) and isset($_POST["pwd"])){
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];
    if($login == "emsi" and $pwd == "emsi"){
        session_start();
        $_SESSION["login"] = $login;
        header("location:contenu.php");
    }else{
        header("location:authentif.php?error=login");
    }
}
?>