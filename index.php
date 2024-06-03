<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fightclub</title>
</head>
<body>
    <?php
        session_start();
        require ("session.php");
        require("database.php");
    ?>
    Zalogowany jako: <?= $_SESSION["login"] ?>
    <a href="logout.php">Wyloguj</a>
    <h1>Main page</h1>
</body>
</html>