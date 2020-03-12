<?php
require "config.php";

if (isset($_GET['signup'])){
    $name = $_GET["name"];
    echo "$name" . '<br/>';
    $email = $_GET["email"];
    echo "$email" . '<br/>';
    $pass = $_GET["pass"];
    echo "$pass" . '<br/>';
    $re_pass = $_GET["re_pass"];
    echo "$re_pass" . '<br/>';
    echo json_encode ("THANCKS For sent");
//    $agree_term = $_GET["agree_term"];
//    echo "$agree_term" . '<br/>';
}