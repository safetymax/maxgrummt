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
            //read from database
            $query = "select * from users where name = '$user_name' limit 1";
            
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                   $user_data = mysqli_fetch_assoc($result);
                   $dbpass = $user_data['password'];

                   if(password_verify($password,$dbpass))
                   {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: \index.php");
                        die;
                   }
                }
            }

            echo "wrong username or password!";
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
    <title>Login</title>
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
<div style="font-size: 20px; margin: 10px; black: white;">Login</div>
<div style="font-size: 15px; margin: 10px; color: black;">Signup working again, but all accounts had to be reset</div>
<input class="text" type="text" name="user_name" value="Username"><br><br>
<input class="text" type="password" name="password" value="Password"><br><br>

<input class="button" type="submit" value="Login"><br><br>

<a class="text" href="signup.php">Click to Signup</a><br><br>
</form>
</div>
</body>
</html>