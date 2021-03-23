<?php

function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: login.php");
    die;
}

function check_loginplus($con)
{
    if(isset($_SESSION['user_id']))
    {
        if($_SESSION['user_id']=="988575517"){
            $id = $_SESSION['user_id'];
            $query = "select * from users where user_id = '$id' limit 1";
            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
    }

    //redirect to login
    header("Location: login.php");
    die;
}

function random_num($length)
{
    $text = "";

    if($length < 5){
        $length = 5;
    }

    $len = rand(4,$length);

    for($i = 0; $i < $len; $i++)
    {
        $text .= rand(0,9);
    }
    return $text;
}

function get_messages($con){
    for($i = 0;$i<2:$i++){
        $query = "select * from users a join messages b on a.user_id = b.outgoing_msg_id where b.id = '$i'";
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0){
            $message_data = mysqli_fetch_assoc($result);

            echo $message_data;
            //return $message_data;
        }
    }
    die;
}