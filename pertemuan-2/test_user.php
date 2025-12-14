<?php

require "User.php";

$u = new User();        // bikin object
$u->name = "Rani";     // isi data
echo $u->sayHello();   // panggil method
