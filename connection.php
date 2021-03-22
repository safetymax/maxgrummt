<?php

$dbhost = "localhost";
$dbuser = "u168783728_safetymax";
$dbpass = "dJ2@YSEqXUi!vqV";
$dbname = "u168783728_users";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect");
}