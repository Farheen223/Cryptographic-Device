<?php
$nameError = "";
$passwordError = "";
if(isset($_POST['submit'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    if(empty($username)) {
        $nameError = "<br />Name is Required";
    } else {
        $username = trim($username);
        $username = htmlspecialchars($username);
        if(!preg_match("/^[a-z A-Z ]$/", $username)) {
            $nameError = "<br />name should contain only characers and space";
        }
    }

    if(empty($password)) {
    $passwordError = "<br />Password is Required";
    } else {
        if(strlen($password) <=8) {
        $passwordError = "<br />At least 8 digits";
        } elseif(!preg_match("#[0-9]+#", $password)) {
        $passwordError = "<br />At least one digit";
        } elseif(!preg_match("#[a-z]+#", $password)) {
        $passwordError = "<br />At least one small character";
        } elseif(!preg_match("#[A-Z]+#", $password)) {
        $passwordError = "<br />At least one upper case";
        }
    }
    }
