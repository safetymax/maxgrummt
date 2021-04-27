<?php

$dbhost = "localhost";
$dbuser = "emgv2ta1qhn2@localhost";
$dbpass = "@mT7Q!maJ7gw8xX";
$dbname = "maximiliangrummt_accounts";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("website under construction");
}