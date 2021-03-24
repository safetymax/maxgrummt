<?php
session_start();

    $_SESSION;

    include("connection.php");
    include("functions.php");

    $user_data = check_loginplus($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <style>
    html{
        background: black;
    }
    .header {
            outline: 3px;
            outline-width: 3px;
            outline-style: solid;
            outline-color: rgb(192, 192, 192);

            font-family:'Questrial', sans-serif;
            letter-spacing: 3px;
            font-size:5vw;

            border: none;
            background: none;
            color: rgb(246, 100, 222);
    }
    .div1{
        height: max-content;
        width:50vw;
        background: none;
        line-height:normal;
        text-align:left ;

        position: absolute;
        display: block;
        z-index: 99;
        left:25vw;
        top: 20%;
    }
    ul{
        list-style-type: none;
    }
    .text {
        outline: 3px;
        outline-width: 3px;
        outline-style:dotted;
        outline-color: rgb(192, 192, 192);
        outline-offset: 0.6vw;

        font-family:'Questrial', sans-serif;
        letter-spacing: 3px;
        font-size:1.5vw;

        border: none;
        background: none;
        color: rgb(246, 100, 222);
    }
    h1 {
        font-family:'Questrial', sans-serif;
        letter-spacing: 3px;
        font-size:2vw;

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
    <div style="text-align:center;width:20vw;position: absolute;display: block;z-index: 99;left:40vw;">
    <h1 class="header">About</h1>
    </div>
    <div class="div1">
    <ul>
        <li class="text">Name: Maximilian Grummt</li><br><br>
        <li class="text">Age: 15yo</li><br><br>
        <li class="text">Location: Germany</li><br><br>
        <li class="text">Name: Maximilian Grummt</li><br><br>
        <li class="text">Name: Maximilian Grummt</li><br><br>

    </ul>
    </div>
</body>
</html>