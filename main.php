<!-- this is main file -->
<?php
session_start();
// variables to connect with db and to display all notes
require 'functions.php';

$connect = connectToDb();
$currentUser = $_SESSION['currentUser'];
$zapytanie = $connect->query("SELECT * FROM `notatki` WHERE owner = '$currentUser' ORDER BY id DESC");
echo("<div id='currUser'>");
echo("Current user: $currentUser <br>");
//echo("</div>");
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

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <a href="about.php" class="about">ABOUT</a>
    <a href="login.php" class="about">LOG OUT</a>
    </div>

    <!-- form for writing and adding notes -->
    <div id="logInFormMain">
        <h3>Dodaj notatkę</h3>
    <form  action='create.php' method='post'>
        <input type="hidden" name="owner" id="owner" value=<?=$currentUser?>>
        <input type="text" name="title" id="title" placeholder="your title">
        <textarea name="description" id="description" cols="30" rows="20" placeholder="your description"></textarea>
        <!--<input type="text" name="description" id="description" placeholder="your description">
-->   <input type="submit" value="add note">
    </form>
</div>
 
<div id="noteDisplay">
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
            <hr>
            <div class="note-text"><?= $pytanie['description']?></div>
            <div class="note-date"><?= $pytanie['date']?></div>

            <form action="delete.php">
            <input type="hidden" name="id" value="<?=$id?>">
            <button class="exit">x</button>
            </form>

        </div>
        <?php endforeach; ?>

    </div>
        </div>


</body>
</html>