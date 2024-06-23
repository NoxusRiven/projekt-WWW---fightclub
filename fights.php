<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainPageStyle.css">
    <title>Amatorskie walki</title>
</head>
<body>
    <?php
        require ("session.php");
        require("database.php");
    ?>
    <header>
        <p>Zalogowany jako: <?= $_SESSION["login"] ?></p>
        <nav><a href="logout.php">Wyloguj</a></nav>
        <h1>Fightclub</h1>
        <nav>
            <a href="index.php">Strona głowna</a>
            <a href="community.php">Forum społecznościowe</a>
            <a href="bets.php">Głosowanie</a>
            <a href="yourAchivments.php">Wasze osiągnięcia</a>
            <a href="fights.php" class="wybrany">Amatorskie walki</a>
        </nav>
    </header>

    <footer>
        <p><b>Informacje o właścicielu strony:</b></p>
            <p><b>Imie i nazwisko:</b> Damian Woźny</p>
            <p><b>Telefon:</b> 884805777</p>
            <p><b>Email:</b></p>
            <p>-prywatny: damianmdxvpc18@gmail.com</p>
            <p>-szkolny: dw89246@stud.uws.edu.pl</p>   
    </footer>
</body>
</html>