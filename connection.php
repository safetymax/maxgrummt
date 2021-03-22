<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "u168783728_users";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect");
}