<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainPageStyle.css">
    <title>Społeczność</title>

    <script>
        function toggleContent(id) 
        {
            const content = document.getElementById('post-'+id);
            if (content.style.display === 'none') 
            {
                content.style.display = 'block';
            } 
            else 
            {
                content.style.display = 'none';
            }
        }
    </script>
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
                $sql = "SELECT id, nick, naglowek, tresc, data FROM wpisy";
                $result = $conn->query($sql);
                
                if($result->num_rows > 0)
                {
                        
                    while($row = $result->fetch_object())
                    {
                        echo "<div>";
                        echo "<p>{$row->nick}: {$row->naglowek}</p>";
                        echo "</div>";
                        echo "<div class='post-toggle' id='post-".$row->id."'>";
                        echo "<p>{$row->tresc}</p>";
                        echo "<p>{$row->data}</p>";
                        echo "<button onclick='toggleContent(".$row->id.")' class='post-button'>Pokaż/schowaj komentarze</button>";
                        echo "</div>";
                        echo "<button onclick='toggleContent(".$row->id.")' class='post-button'>Pokaż/schowaj treść</button>";
                        
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