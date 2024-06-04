<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainPageStyle.css">
    <title>Dodaj wpis</title>
</head>
<body>
    <?php
        require("session.php");
    ?>
    <form action="addPost.php" method="post">
        <input type="hidden" name="nick" value="<?php $_SESSION["login"] //upewnij sie ze dobrze zrobione?>"> 
    </form>
</body>
</html>