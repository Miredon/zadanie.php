
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona głowna</title>
</head>
<body>
    <a href="formulrz.php">
        <button>Formularz</button>
    </a>
    <a href="usun.php">
        <button>usuń uczniów</button>
    </a>
</body>
</html>

<?php

$user = "root";
$host = "localhost";
$pass = "";
$db = "uczniowie 2c";

$polaczenie = new mysqli($host, $user, $pass, $db);


$sql = "SELECT imie, nazwisko, ocena, id, miasto FROM uczniowie";
$result = $polaczenie->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div id='border'";
        echo "Imię: " . $row["imie"] . "<br>";
        echo "Imię: " . $row["imie"] . "<br>";
        echo "Nazwisko: " . $row["nazwisko"] . "<br>";
        echo "Ocena: " . $row["ocena"] . "<br>";
        echo "Id: " . $row["id"] . "<br>";
        echo "miasto: " . $row["miasto"] . "<br>";
        echo "</div>";
    }
} else {
    echo "Brak wyników.";
}

$polaczenie->close();

