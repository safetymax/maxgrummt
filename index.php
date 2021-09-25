<?php
    session_start();

    $_SESSION;

    include("sites/connection.php");
    include("sites/functions.php");
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
            justify-content: center;
            align-items: center;
            background: #202020;
            border-radius:3%;
            top: 100%;
            left: 1vw;
            min-height: 20vh;
            min-width: 5vw;
        }
        
        ul.no-bullets {
            list-style-type: none;
            margin: 0;
            padding: 0;
            font-family: "Sen", sans-serif;
            color: white;
            font-size: 2vw;
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
        <img src="img/Group 5logoG.png" class="logo" onclick="roll()">
    </div>
    <div class="divdrop">
        <img src="img/Group 7drop.png" class="dropdown" onclick="dropdown()">
        <div class="dropdowncontent">
            <ul class="no-bullets">
                <br>
                <li onclick="homeclick()"> home </li>
                <br>
                <li onclick="zitateclick()"> zitate </li>
                <br>
                <li onclick="aboutclick()"> about </li>
                <br>
                <li id="logButton">TEST 4</li>
                <br>
            </ul>
        </div>
    </div>


    <script>
        function roll() {
            window.open("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        }

        function zitateclick(){
            document.location.href = "sites/citations.php";    
        }

        function aboutclick(){

        }

        function homeclick(){
            document.location.href = "index.php";
        }

        if(<?php echo isset($_SESSION['user_id']);?>+0 == 1){
            document.getElementById("logButton").innerHTML = " logout ";
            document.getElementById("logButton").onclick = function(){
                document.location.href = "sites/logout.php";
            }
        }
        else{
            document.getElementById("logButton").innerHTML = " login ";
            document.getElementById("logButton").onclick = function(){
                document.location.href = "sites/login.php";
            }
        }
    </script>
</body>

</html>
