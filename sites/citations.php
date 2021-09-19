<?php
session_start();

$_SESSION;

include("connection.php");
include("functions.php");

$user_data = check_login($con);

$message_data = get_citations($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    new_citation($con, $_SESSION, $_POST['message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <style>
        html{
            background: black;
        }
        .div1{
            height: max-content;
            width:70vw;
            background: none;
            line-height:normal;
            text-align: center;

            position: absolute;
            display: block;
            z-index: 99;
            left:15vw;
            top: 0%;
        }
        ul{
            list-style-type: none;
        }
        .text {
            font-family:'Questrial', sans-serif;
            letter-spacing: 3px;
            font-size:1.5vw;

            border: none;
            background: none;
            color: rgb(246, 100, 222);
        }
        .textinput{
            font-family:'Questrial', sans-serif;
            letter-spacing: 3px;
            font-size:1.5vw;

            border: none;
            background: white;
            color: rgb(246, 100, 222);
        }
        .button{
            font-family:'Questrial', sans-serif;
            letter-spacing: 3px;
            font-size:1.5vw;
            color: black;
            background-color: hotpink;
            border: none;
        }
    </style>
</head>
<body>
<form method="post">
    <input class="textinput" type="text" name="message"><br><br>
    <input class="button" type="submit" value="Send">
</form>
<p class="button"><?php for($i = 1;$i<=count($message_data);$i+=1){ echo "{$message_data[$i]["message"]} + \n";} ?></p>
</body>
</html>
