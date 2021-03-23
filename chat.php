<?php
session_start();

    $_SESSION;

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

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
<button class="button" onclick="mclick()">back to Homepage</button>
<div class="div1">
    <h1 class="text">Chat</h1>
    <form method="post">
            <input class="textinput" type="text" name="message"><br><br>
            <input class="button" type="submit" value="Send">
    </form>
    <ul>
        <li class="text"><?php echo $message_data[14]['user_name'].": ";echo $message_data[14]['msg']?></li>
        <li class="text"><?php echo $message_data[13]['user_name'].": ";echo $message_data[13]['msg']?></li>
        <li class="text"><?php echo $message_data[12]['user_name'].": ";echo $message_data[12]['msg']?></li>
        <li class="text"><?php echo $message_data[11]['user_name'].": ";echo $message_data[11]['msg']?></li>
        <li class="text"><?php echo $message_data[10]['user_name'].": ";echo $message_data[10]['msg']?></li>
        <li class="text"><?php echo $message_data[9]['user_name'].": ";echo $message_data[9]['msg']?></li>
        <li class="text"><?php echo $message_data[8]['user_name'].": ";echo $message_data[8]['msg']?></li>
        <li class="text"><?php echo $message_data[7]['user_name'].": ";echo $message_data[7]['msg']?></li>
        <li class="text"><?php echo $message_data[6]['user_name'].": ";echo $message_data[6]['msg']?></li>
        <li class="text"><?php echo $message_data[5]['user_name'].": ";echo $message_data[5]['msg']?></li>
        <li class="text"><?php echo $message_data[4]['user_name'].": ";echo $message_data[4]['msg']?></li>
        <li class="text"><?php echo $message_data[3]['user_name'].": ";echo $message_data[3]['msg']?></li>
        <li class="text"><?php echo $message_data[2]['user_name'].": ";echo $message_data[2]['msg']?></li>
        <li class="text"><?php echo $message_data[1]['user_name'].": ";echo $message_data[1]['msg']?></li>
        <li class="text"><?php echo $message_data[0]['user_name'].": ";echo $message_data[0]['msg']?></li>
    </ul>
    </div>
    <script>
    function mclick(){
        document.location.href = "index.php";
    }
    </script>
</body>
</html>