<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularz</title>
</head>
<body>
    <a href="strona.php">
        <form action="kod do usuwania.php" method="post">
    <input type="submit" value="usus uczniów którzy nie zdaja">
</form>
</body>
</html>

<?php
$user = "root";
$host = "localhost";
$pass = "";
$db = "uczniowie 2c";


$polaczenie = mysqli_connect($host, $user, $pass, $db);

$sql = "DELETE FROM uczniowie WHERE ocena = 1";

mysqli_close($polaczenie);



?>