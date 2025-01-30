<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuwanie</title>
</head>
<body>
<a href="strona.php">
        <button>strona głowna</button></a><br>
</body>
</html>

<?php
$user = "root";
$host = "localhost";
$pass = "";
$db = "uczniowie 2c";


$polaczenie = mysqli_connect($host, $user, $pass, $db);

$sql = "DELETE FROM uczniowie WHERE ocena = 1";

if (mysqli_query($polaczenie, $sql)){
    echo "uczeń został usunięty";
}
else{
    echo"błąd";
}

mysqli_close($polaczenie);



?>