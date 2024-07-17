<?php

session_start(); 

$name = $_REQUEST["name"];
$username = $_REQUEST["username"];
$_SESSION["email"] = $_REQUEST["email"];

echo $name . "<br>" . $username . "<br>" . $_SESSION["email"];