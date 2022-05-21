<?php
require 'functions.php';
$connect = connectToDb();

$id=$_REQUEST['id'];

$sql = ("DELETE FROM notatki WHERE id=$id");



// try to delete note by id, if failed, dump an error
if(mysqli_query($connect, $sql)){
    header('Location: main.php');
} else{
    echo "ERROR: Couldn't delete this note, sql statement: $sql. 
    <br>Possible reason: "
    . mysqli_error($connect);
}

?>