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
    <style>
        @import url(base.css);
    </style>
</head>

<body>
    <form method="post">
        <input class="textinput" type="text" name="title" placeholder="Titel" autocomplete="off"><br><br>
        <input class="textinput" type="text" name="message" placeholder="Nachricht" autocomplete="off"><br><br>
        <input class="button" type="submit" value="Add">
    </form>
    <section class="basic-grid">
        <?php
            for($i = 0;$i<1;$i++){
                echo "<div class=\"widget\"><h3>";
                echo "{$gossip_data[$i]["title"]}";
                echo "</h3><p>";
                echo "{$gossip_data[$i]["msg"]}";
                echo "</p></div>";

            }
        ?>
    </section>
    <script>
        console.log("<?php echo "{$gossip_data[0]["title"]}"; ?>");
        console.log("<?php echo "{$gossip_data[0]["msg"]}"; ?>");
    </script>
</body>

</html>