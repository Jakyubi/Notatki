<?php
require 'functions.php';
$connect = connectToDb();

$nazwa = $_REQUEST['title'];
$desc = $_REQUEST['description'];
$time = date('Y-m-d H:i:s');
$user = $_REQUEST['owner'];


$sql = "INSERT INTO notatki  VALUES ('', '$nazwa', '$desc', '$time', '$user')";

// try to add note, if failed, dump an error
if(mysqli_query($connect, $sql)){
    header('Location: main.php');
} else{
    echo "ERROR: Couldn't add this note, sql statement: $sql. 
    <br>Possible reason: "
    . mysqli_error($connect);
}

