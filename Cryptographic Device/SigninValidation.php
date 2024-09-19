<?php
if($_POST["form_submit"] == "Submit") {
    $output="";
    $error_message="";
    if(isset($_POST["form_username"]))
    {
        $username = $_POST['form_username'];
    }
    if(isset($_POST['form_password'])){
        $password = $_POST['form_password'];
    }
    
    if(empty(['form_username'])) {
        $nameError = "<p>UserName is Required</p>";
    } 
    if(empty(['form_password'])) {
        $passwordError = "<p>Password is required</p>";
    }
$var_username = $_POST["form_username"];
$var_password = $_POST["form_password"];

if (!empty($error_message)){
    $output = "<p> There is a problem with the form information</p>\n";
    $output = "<ul>" .$error_message . "<ul>\n";
    }
    echo $output;
}



