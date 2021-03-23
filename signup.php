<?php 
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password))
        {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $test_name_query = "select user_name from users where user_name = \"'$user_name'\"";
            $test_name_result = mysqli_query($test_name_query);
            if($test_name_result && mysqli_num_rows($test_name_result) < 1){
                echo "USERNAME ALREADY TAKEN";
                header("Location: signup.php");
                die;
            }
            else{
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            echo "valid";
            mysqli_query($con, $query);

            //header("Location: login.php");
            die;
            }
        }
        else
        {
            echo "please enter valid information!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style type="text/css">
        html{
            background: black;
        }
        .text{
            color: black;
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }
        .button{
            padding: 10px;
            width: 100px;
            color: black;
            background-color: hotpink;
            border: none;
        }
        .box{
            background-color: lightgrey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>
</head>
<body>
    
<div class="box">

<form method="post">
<div style="font-size: 20px; margin: 10px; color: black;">Signup NOT WORKING AT THE MOMENT</div>
<input class="text" type="text" name="user_name"><br><br>
<input class="text" type="password" name="password"><br><br>

<input class="button" type="submit" value="Signup"><br><br>

<a class="text" href="login.php">Click to Login</a><br><br>
</form>
</div>
</body>
</html>