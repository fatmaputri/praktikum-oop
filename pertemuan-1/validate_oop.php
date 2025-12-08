<?php

require "Validator.php";

$val = new Validator();

// isi manual & valid
$username = "fatmaputri";
$email    = "fatma@gmail.com";

$val->checkTextLength('username', $username, 6, 12);
$val->checkEmail('email', $email);

if ($val->fails()) {
    print_r($val->errors());
} else {
    echo "Valid!";
}
