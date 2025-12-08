<?php

require_once "Book.php";
require_once "DVD.php";

$book = new Book("Pemrograman PHP", 80000, 250);
$dvd  = new DVD("Film Action", 50000, 120);

echo $book->getInfo() . "\n";
echo $dvd->getInfo() . "\n";
