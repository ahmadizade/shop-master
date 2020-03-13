<?php
require "config.php";
//require "common.php";

if (isset($_GET['signup'])) {
    $name = $_GET["name"];
    $family = $_GET["family"];
    $username = $_GET["username"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $pass = $_GET["pass"];
    $pass = md5($pass);
    $mysqli->query("INSERT INTO customers (name,family,user_name,email,phone,password) VALUES ('$name','$family','$username','$email','$phone','$pass')");
    if ($mysqli->errno == 0) {
        echo json_encode(1001);
    } else {
        echo json_encode(1000);
    }
}
if (isset($_GET["cookie"])) {
    $username = $_GET["your_name"];
    $pass = $_GET["your_pass"];
}
if (isset($_GET["session"])) {
    $username = $_GET["your_name"];
    $pass = $_GET["your_pass"];
    $_SESSION['login_user'] = $username;
    $login_user = $_SESSION['login_user'];
    $_SESSION['login_pass'] = $_GET["your_pass"];
    $login_pass = $pass;
    $result = mysqli_query($conn, "SELECT * FROM customers WHERE email='" . $login_user . "' and password = '" . md5($login_pass) . "'");
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        echo json_encode(1000);
    }else {
        $sql_name = "SELECT name FROM `customers` WHERE email='$login_user';";
        $result_name = $mysqli->query ( $sql_name );
        $result_name = $result_name->fetch_all ();
//        echo $result_name[0][0];
        $sql_family = "SELECT family FROM `customers` WHERE email='$login_user';";
        $result_family = $mysqli->query ( $sql_family );
        $result_family = $result_family->fetch_all ();
        //        echo $result_family[0][0];
        $json_result = array(
            'name' => $result_name[0][0],
            'family' => $result_family[0][0],
            'email' => $username,
        );
        echo json_encode($json_result);
    }


}
