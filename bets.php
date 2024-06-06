<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainPageStyle.css">
    <title>Głosowanie</title>
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
        <h1>Głosowanie zwycięsców walk</h1>

        <?php
            $sql = "SELECT osoba1, osoba2, liczbaGlosow1, liczbaGlosow2 FROM glosowanie";
            $result = $conn->query($sql);

                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_object())
                    {
                        echo "<div>";                            
                        echo "<p>{$row->osoba1}</p>";
                        echo "<p>{$row->osoba2}</p>";
                        echo "<p>{$row->liczbaGlosow1}</p>";
                        echo "<p>{$row->liczbaGlosow2}</p>";
                        echo "</div>";
                        $index++;
                    }
                }
                else
                {
                    echo "<p>Brak wydarzeń</p>";
                }
                $conn->close();
        ?>
    </main>
</body>
</html>