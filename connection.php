<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "u168783728_users";

echo $dbhost, $dbuser, $dbpass, $dbname

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect");
}