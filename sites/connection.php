<?php

$dbhost = "localhost";
$dbuser = "cpses_ma8kcazef3";
$dbpass = "Yi9@X!gYv!GBEJn";
$dbname = "maximil2_accounts";

if($con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("website under construction but kinda works lmao");
}
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("website under construction");
}
