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
        if($_SESSION['user_id']=="1" || $_SESSION['user_id']=="2"){
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

    for($i = 0; $i < $length; $i++)
    {
        $text .= rand(0,9);
    }
    return $text;
}

function get_citations($con){
    $output = [];

    $query = "select * from users a join citations b on a.user_id = b.user_id";
    $result = mysqli_query($con, $query);

    if($result && mysqli_num_rows($result) > 0){
        $message_data = mysqli_fetch_assoc($result);
    }

    for($i = 1;$i<mysqli_num_rows($result);$i+=1){
        $new_query = "select * from users a join citations b on a.user_id = b.user_id where b.c_id = '$i' limit 1";
        $new_result = mysqli_query($con, $new_query);

        $new_citation_data = mysqli_fetch_assoc($new_result);
        $output[$i] = $new_message_data;
    }

    return $output;
    die;
}

function new_citation($con, $user_data, $message){
    if($message){
        if(isset($user_data['user_id']))
        {
            $id = $user_data['user_id'];
            $query = "select * from users where user_id = '$id' limit 1";
            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
            }
        }
        $user_id = $user_data['user_id'];
        check_loginplus($con);
        $query = "insert into citations (user_id, message) values ('$user_id','$message')";
        mysqli_query($con, $query);
    }
    header("Location: citations.php");
    return;
    die;
}

/*function get_messages($con, $amount){
        $output = [];

        $query = "select * from users a join messages b on a.user_id = b.outgoing_msg_id";
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0){
            $message_data = mysqli_fetch_assoc($result);
        }
        $counter = 0;
        for($i = mysqli_num_rows($result);$i>mysqli_num_rows($result)-$amount;$i-=1){
            $new_query = "select * from users a join messages b on a.user_id = b.outgoing_msg_id where b.id = '$i' limit 1";
            $new_result = mysqli_query($con, $new_query);
            
            $new_message_data = mysqli_fetch_assoc($new_result);
            $output[$counter] = $new_message_data;
            $counter++;
        }
        return $output;
        die;
}

function send_message($con, $user_data, $msg){
    if($msg){
        if(isset($user_data['user_id']))
        {
            $id = $user_data['user_id'];
            $query = "select * from users where user_id = '$id' limit 1";
            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
            }
        }
        $user_id = $user_data['user_id'];
        $query = "insert into messages (outgoing_msg_id, msg) values ('$user_id','$msg')";
        mysqli_query($con, $query);
    }
    header("Location: chat.php");
    return;
    die;
}*/