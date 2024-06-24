<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="betScript.js"></script>
    <script src="menuScript.js"></script>
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
    <div class="menuDiv">
            <h1>Fightclub</h1>
            <div class="menuContainer">
            <img src="menu-icon.png" class="menuIcon" width="120" height="160">
                <ul class="menu-list">
                    <li><p>Zalogowany jako: <?= $_SESSION["login"] ?></p></li>
                    <li><nav><a href="logout.php">Wyloguj</a></nav></li>
                </ul>
            </div>
        </div>
        <nav>
            <a href="index.php">Strona głowna</a>
            <a href="community.php">Forum społecznościowe</a>
            <a href="bets.php" class="wybrany">Głosowanie</a>
            <a href="yourAchivments.php">Wasze osiągnięcia</a>
            <a href="fights.php">Amatorskie walki</a>
        </nav>
    </header>
    <main>
        <div class="form">
            <h1>Głosowanie zwycięsców walk</h1>
            <a href="addBetForm.php">Dodaj głosowanie</a>
            <?php
                $sql = "SELECT id, osoba1, osoba2, liczbaGlosow1, liczbaGlosow2 FROM glosowanie";
                $result = $conn->query($sql);

                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_object())
                        {
                            echo "<div class='bet' data-idGlosowania='$row->id'>";                            
                            echo "<p>{$row->osoba1}<span class='gap'></span>{$row->osoba2}</p>";
                            echo "<p><span class='liczbaGlosow1' data-id='$row->id' glosowalNa='$row->osoba1'>{$row->liczbaGlosow1}</span>";
                            echo "<span class='gap'></span>";
                            echo "<span class='liczbaGlosow2' data-id='$row->id' glosowalNa='$row->osoba2'>{$row->liczbaGlosow2}</span></p>";
                            echo "<div class='buttonDiv'>";
                            echo "<button class='button-bet1'>Oddaj głos</button>";
                            echo "<span class='gap'></span>";
                            echo "<button class='button-bet2'>Oddaj głos</button>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                    else
                    {
                        echo "<p>Brak wydarzeń</p>";
                    }
                    $conn->close();
            ?>
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