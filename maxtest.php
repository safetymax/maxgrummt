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
</head>
<body>
    <h1>Test</h1>
    <script src="js/maxtest.js"></script>
    <form method="post">
        <div style="font-size: 20px; margin: 10px; color: black;">Send Message</div>
            <input class="text" type="text" name="message"><br><br>
            <input class="button" type="submit" value="Send">
        </div>
    </form>
    <ul>
        <li><?php echo $message_data[4]['msg']?></li>
        <li><?php echo $message_data[3]['msg']?></li>
        <li><?php echo $message_data[2]['msg']?></li>
        <li><?php echo $message_data[1]['msg']?></li>
        <li><?php echo $message_data[0]['msg']?></li>
    </ul>
</body>
</html>