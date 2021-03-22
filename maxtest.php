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
    <title>Max' Labor</title>
</head>
<body>
    <h1>Test</h1>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.3/socket.io.js" integrity="sha512-2RDFHqfLZW8IhPRvQYmK9bTLfj/hddxGXQAred2wNZGkrKQkLGj8RCkXfRJPHlDerdHHIzTFaahq4s/P4V6Qig==" crossorigin="anonymous"></script>"
    <script src="js/maxtest.js"></script>
</body>
</html>