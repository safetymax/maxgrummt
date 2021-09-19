<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <title>Maximilian Grummt</title>
    <style>
        
        body {
            margin: 0;
        }
        canvas{
            display: block;
            width: 100%;
            height: 100%;
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
            top: 40%;
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
        .text {
            font-family:'Questrial', sans-serif;
            letter-spacing: 3px;
            font-size:2.5vw;

            border: none;
            background: none;
            color: rgb(246, 100, 222);
        }
        .about{
            outline: 1px;
            outline-width: 1px;
            outline-style: solid;
            outline-color: rgb(192, 192, 192);

            font-family:'Questrial', sans-serif;
            letter-spacing: 0.1vw;
            font-size: 2vw;
            color: rgb(246, 100, 222);

            border: none;
            background: none;

            position: absolute;
            display: block;
            z-index: 99;
            left: 1vw;
            top: 1%;
        }
        .blog{
            outline: 1px;
            outline-width: 1px;
            outline-style: solid;
            outline-color: rgb(192, 192, 192);

            font-family:'Questrial', sans-serif;
            letter-spacing: 0.1vw;
            font-size: 2vw;
            color: rgb(246, 100, 222);

            border: none;
            background: none;

            position: absolute;
            display: block;
            z-index: 99;
            left: 10vw;
            top: 1%;
        }
        .chat{
            outline: 1px;
            outline-width: 1px;
            outline-style: solid;
            outline-color: rgb(192, 192, 192);

            font-family:'Questrial', sans-serif;
            letter-spacing: 0.1vw;
            font-size: 2vw;
            color: rgb(246, 100, 222);

            border: none;
            background: none;

            position: absolute;
            display: block;
            z-index: 99;
            left: 17vw;
            top: 1%;
        }
        .log{
            outline: 1px;
            outline-width: 1px;
            outline-style: solid;
            outline-color: rgb(192, 192, 192);

            font-family:'Questrial', sans-serif;
            letter-spacing: 0.1vw;
            font-size: 2vw;
            color: rgb(246, 100, 222);

            border: none;
            background: none;

            position: absolute;
            display: block;
            z-index: 99;
            left: 24vw;
            top: 1%;
        }
    </style>
</head>
<body id="ID"> 
    <script src="js/perlin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/104/three.js"></script>
    <script src="js/index.js"></script> 
    <script src="js/client.js"></script>
    <div class="div1">
    <button class="header" onclick="myclick()">Maximilian Grummt</button>
    <p class="text" id="timer"></p>
    </div>
    <button class="about" onclick="aboutclick()">About</button>
    <button class="blog" onclick="blogclick()">Blog</button>
    <button class="chat" onclick="chatclick()">Chat</button>

    <script>
        <?php
            session_start();

            $_SESSION;

            include("sites/connection.php");
            include("sites/functions.php");
        ?>
        function myclick(){
            window.open("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        }
        function aboutclick(){
            //document.location.href = "Max/about.html";
        }
        function blogclick(){
            
        }
        function chatclick(){
            document.location.href = "chat.php";
        }

        /*if(<?php echo isset($_SESSION['user_id']);?>+0 == 1){
            var newElement = document.createElement("button");
            newElement.innerHTML = "Logout";
            newElement.className = "log";
            newElement.onclick = function(){
                document.location.href = "logout.php";
            }
            document.getElementById("ID").appendChild(newElement);
        }
        else{
            var newElement = document.createElement("button");
            newElement.innerHTML = "Login";
            newElement.className = "log";
            newElement.onclick = function(){
                document.location.href = "login.php";
            }
            document.getElementById("ID").appendChild(newElement);
        }*/

        window.addEventListener('resize', onWindowResize);

        function onWindowResize(){
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
            
            camera.position.z = window.innerWidth/3;

            scene.remove(mesh);
            createPlane();
        }

        //COUNTDOWN TIMER

        var countDownDate = new Date("Mar 29, 2021 23:00:00").getTime();

        var x = setInterval(function() {

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("timer").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s "+"-- UNTIL NEXT UPDATE";

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "NEW UPDATE OUT NOW";
        }
        }, 1000);
    </script>
</body>
</html>
