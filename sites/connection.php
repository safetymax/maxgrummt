<?php

$dbhost = "localhost";
$dbuser = "cpses_ma8kcazef3";
$dbpass = "";
$dbname = "maximil2_accounts";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("website under construction");
}
