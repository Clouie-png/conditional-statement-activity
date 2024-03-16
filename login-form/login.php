<?php
$user = $_GET["user"];
$pass = $_GET["pass"];

if($user == "admin" && $pass == "password123") {
    echo "LOGIN SUCCESFUL";
}elseif($user == "admin" && $pass != "password123"){
    echo "invalid password";
}elseif($user != "admin" && $pass != "password123"){
    echo "invalid username or password";
}elseif($user != "admin" && $pass == "password123"){
    echo "invalid username or password";
}
?>