<?php

$dbhost = "localhost";
$dbuser = "safetymax";
$dbpass = "@mT7Q!maJ7gw8xX";
$dbname = "maximiliangrummt_accounts";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("website under construction");
}