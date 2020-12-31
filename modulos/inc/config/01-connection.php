<?php

$dbuser = 'root';
$dbpass = 'hola123';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=peliculasyseries', $dbuser, $dbpass);
    $dbh->exec('set names utf8');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>