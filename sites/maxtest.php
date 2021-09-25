<?php
session_start();

    $_SESSION;

    include("connection.php");
    include("functions.php");

    $user_data = check_loginplus($con);
?>

<!DOCTYPE html>
<head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sen&display=swap');

        html {
            overflow-x: hidden;
            overflow-y: hidden;
        }

        body {
            background: #929292;
        }

        .divlogo {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80%;
            width: 100%;
        }

        .divcircle {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .divdrop {
            position: absolute;
            display: flex;
            height: 5%;
            width: 5%;
        }

        .logo {
            width: 18%;
            filter: drop-shadow(0px 20px 15px rgba(0, 0, 0, 0.25));
        }

        .logo:hover{
            width: 22%;
            height: auto;
        }

        .dropdown {
            height: 100%;
            width: 100%;
        }

        .dropdowncontent{
            position: absolute;
            display: none;
            font-family: "Sen", sans-serif;
            color: white;
            font-size: 1vw;
            background: #202020;
            border-radius:20%;
            top: 6vh;
            left: 1vw;
            height: 20vh;
            width: 5vw;
        }

        .divdrop:hover .dropdowncontent{
            display: flex;
        }

        .circle {
            height: 155vh;
            width: 155vh;
            background-color: #BCBCBC;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="divcircle">
        <div class="circle"></div>
    </div>
    <div class="divlogo">
        <img src="Group 5logoG.png" class="logo" onclick="roll()">
    </div>
    <div class="divdrop">
        <img src="Group 7drop.png" class="dropdown" onclick="dropdown()">
        <div class="dropdowncontent">
            <p>TEST 1</p>
            <p>TEST 2</p>
            <p>TEST 3</p>
            <p>TEST 4</p>
        </div>
    </div>


    <script>
        function dropdown() {
            console.log("Dropdown button pressed!");
        }
        function roll() {
            window.open("https://www.youtube.com/watch?v=dQw4w9WgXcQ");

        }
    </script>
</body>

</html>