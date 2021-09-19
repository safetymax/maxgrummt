<?php

$dbhost = "localhost:3306";
$dbuser = "maximil2_user";
$dbpass = "MaxGrummt05!";
$dbname = "maximil2_accounts";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("website under construction");
}
