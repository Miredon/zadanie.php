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
        <button>strona głowna</button></a>
        <form method="post" action="kod.php">
    <label for="imie">Imię:</label>
    <input type="text" name="imie" ><br><br>
    
    <label for="nazwisko">Nazwisko:</label>
    <input type="text" name="nazwisko"><br><br>
    
    <label for="ocena">Ocena:</label>
    <input type="number" name="ocena"><br><br>
    
    <label for="id">ID:</label>
    <input type="number"  name="id" ><br><br>
    
    <label for="miasto">Miasto:</label>
    <input type="text" name="miasto" ><br><br>

    <input type="submit" value="Dodaj Ucznia">
</form>
</body>
</html>

