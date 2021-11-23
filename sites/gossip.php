<?php
session_start();

$_SESSION;

include("connection.php");
include("functions.php");

$user_data = check_loginhgv($con);

$gossip_data = get_gossip($con, 1, 0);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    new_gossip($con, $_SESSION, $_POST['message'], $_POST['title']);
}
?>

<html>

<head>
    <title>HGV Gossip Box 0.1</title>
</head>

<body>
    <form method="post">
        <input class="textinput" type="text" name="title" placeholder="Titel" autocomplete="off"><br><br>
        <input class="textinput" type="text" name="message" placeholder="Nachricht" autocomplete="off"><br><br>
        <input class="button" type="submit" value="Add">
    </form>

    <script>
        console.log(<?php echo "$gossip_data[0]"; ?>);
    </script>
</body>

</html>