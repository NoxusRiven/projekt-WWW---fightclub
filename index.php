<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainPageStyle.css">
    <title>Fightclub</title>
</head>
<body>
    <?php
        session_start();
        require ("session.php");
        require("database.php");
    ?>
    
    <!DOCTYPE html>
    <header>
        <p>Zalogowany jako: <?= $_SESSION["login"] ?></p>
        <nav><a href="logout.php">Wyloguj</a></nav>
        <h1>Fightclub</h1>
        <nav>
            <a href="spolecznosc.php">Forum społecznościowe</a>
            <a href="obstawy.php">Głosowanie</a>
            <a href="naszeRzeczy.php">Nasze osiągnięcia</a>
        </nav>
    </header>
    <main>
        <div class="wstep">
            <h2>Witamy w Fightclub</h2>
            <p>Jest to strona dla miłośników sztuk walki w którym można znaleźć informacje o najciekawszych eventach w świecie walk, rozmiawiać z innymi użytkownikami i wiele innych ciekawych rzeczy dla osób inretesujących się sztukami walki</p>
        </div>
        <div class="eventy">
            <h2>Eventy w świecie walki</h2>
            <div>
                <p>1. Walka Mike'a Tysona z Jake'm Paulem</p>
                <p>Data: 20 lipca 2024</p>
                <img src="jake x Tyson.jpg" alt="">
            </div>
        </div>
    </main>
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

</body>
</html>