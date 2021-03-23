<?php
session_start();

    $_SESSION;

    include("connection.php");
    include("functions.php");

    $user_data = check_loginplus($con);

    $message_data = get_messages($con);
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
    <p><?php echo $message_data['user_name']; ?></p>
</body>
</html>