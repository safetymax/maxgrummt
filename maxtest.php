<?php
session_start();

    $_SESSION;

    include("connection.php");
    include("functions.php");

    $user_data = check_loginplus($con);

    $message_data = get_messages($con, 5);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        send_message($con, $_SESSION, $_POST['message']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max' Labor</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <style>
        html{
            background: black;
        }
        .div1{
            height: max-content;
            width:100vw;
            background: none;
            line-height:normal;
            text-align: center;

            position: absolute;
            display: block;
            z-index: 99;
            left:0%;
            top: 0%;
        }
        .div2{
            height: max-content;
            width:45vw;
            background: lightgrey;
            line-height:normal;
            text-align: center;

            position: absolute;
            display: block;
            z-index: 99;
            left:0%;
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
        .button{
            padding: 10px;
            width: 100px;
            color: black;
            background-color: hotpink;
            border: none;
        }
    </style>
</head>
<body>
<div class="div1">
    <div class="div2">
    <h1 class="text">Chat</h1>
    <script src="js/maxtest.js"></script>
    <form method="post">
            <input class="text" type="text" name="message"><br><br>
            <input class="button" type="submit" value="Send">
    </form>
    <ul>
        <li class="text"><?php echo $message_data[4]['user_name'].": ";echo $message_data[4]['msg']?></li>
        <li class="text"><?php echo $message_data[3]['user_name'].": ";echo $message_data[3]['msg']?></li>
        <li class="text"><?php echo $message_data[2]['user_name'].": ";echo $message_data[2]['msg']?></li>
        <li class="text"><?php echo $message_data[1]['user_name'].": ";echo $message_data[1]['msg']?></li>
        <li class="text"><?php echo $message_data[0]['user_name'].": ";echo $message_data[0]['msg']?></li>
    </ul>
    </div>
</body>
</html>