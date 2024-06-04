<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainPageStyle.css">
    <title>Społeczność</title>
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
            <a href="fights.php">Amatorskie walki</a>
        </nav>
    </header>
    <main>
        <div class="form">
            <h1>Wpisy użytkowników</h1>
            <a href="addPostForm.php">Dodaj swój wpis</a>
            <?php
                $sql = "SELECT nick, naglowek, tresc FROM wpisy";
                $result = $conn->query($sql);
                
                if($result->num_rows > 0)
                {
                        
                    while($row = $result->fetch_object())
                    {
                        echo "<div style='margin-bottom: 20px;>";
                        echo "<p>{$row->nick}</p>";
                        echo "<p>{$row->naglowek}</p>";
                        echo "<p>{$row->tresc}'></p>";
                        echo "</div>";
                    }
                }
                else
                {
                    echo "<p>Brak wpisów</p>";
                }
                $conn->close();
            ?>
        </div>
    </main>
</body>
</html>