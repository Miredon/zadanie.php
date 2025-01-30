<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kod</title>
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

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$ocena = $_POST['ocena'];
$id = $_POST['id'];
$miasto = $_POST['miasto'];

$polaczenie = mysqli_connect($host, $user, $pass, $db);

if (!$polaczenie) {
    die("nie łaczy " . mysqli_connect_error());
}


$sql = "INSERT INTO uczniowie (imie, nazwisko, ocena, id, miasto) VALUES ('$imie', '$nazwisko', '$ocena', '$id', '$miasto')";

if (mysqli_query($polaczenie, $sql)){
    echo "dodany rekord";
}
else{
    echo"błąd";
}

mysqli_close($polaczenie);


