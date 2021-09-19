<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "maximil2_accounts";

if($con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("website under construction but kinda works lmao");
}
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("website under construction");
}
