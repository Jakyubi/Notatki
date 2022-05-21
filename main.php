<!-- this is main file -->
<?php
session_start();
// variables to connect with db and to display all notes
require 'functions.php';

$connect = connectToDb();
$zapytanie = $connect->query("SELECT * FROM `notatki` ORDER BY id DESC");
$currentUser = $_SESSION['currentUser'];
echo("Current user: $currentUser");
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <br>
    <a href="about.php" class="about">ABOUT</a>
    <!-- form for writing and adding notes -->
    <form class='note-form' action='create.php' method='post'>
        <input type="text" name="title" id="title" placeholder="your title">
        <input type="text" name="description" id="description" placeholder="your description">
        <input type="submit" value="add note" id="add">
    </form>

    <!-- all notes -->
    <div class="notes">

        <?php foreach($zapytanie as $pytanie): ?>
        <!-- each note -->
        <div class="note">

            <?php 
            // id of each note
            $id=$pytanie['id'];
            ?>
            <!-- displaying note (text, date and delete button) -->
            <div class="note-title"><?= $pytanie['title']?></div>
            <div class="note-text"><?= $pytanie['description']?></div>
            <div class="note-date"><?= $pytanie['date']?></div>

            <form action="delete.php">
            <input type="hidden" name="id" value="<?=$id?>">
            <button class="exit">X</button>
            </form>

        </div>
        <?php endforeach; ?>

    </div>




</body>
</html>