<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainPageStyle.css">
    <title>Document</title>
</head>
<body>
    <main>
    
        <div class="form">
        <a href="index.php" class="addEvent-button">Powrót do strony</a>
            <form action="addEventInfo.php" method="post">
                <p>Zdjęcie</p>
                <input type="file" name="zdjecie" class="addEvent-file">
                <p>Tytuł<input type="text" name="tytul" class="addEvent-input"></p>
                <p>Data<input type="text" name="data" class="addEvent-input"></p>
                <input type="submit" value="Dodaj wydarzenie" class="addEvent-button">
            </form>
        </div>
    </main>
</body>
</html>