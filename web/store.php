<?php
error_reporting(0);
$user = $_GET['user'];
$token = $_GET['token'];
if (!empty($user)) {
    file_put_contents('../shell/user', "$user");
    echo "User ID $user stored successfully. ";
}
if (!empty($token)) {
    file_put_contents('../shell/header', "Authorization: Basic $token");
    echo "Token $token stored successfully";
}