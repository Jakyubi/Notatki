<?php
session_start();
require 'topPage.php';

require 'functions.php';
$connect = connectToDb();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";

$zapytanie=$connect->query($sql);

//sets id and username for user
foreach($zapytanie as $users){
    $id = $users["id"];
    $user = $_REQUEST['username'];
}

//if user exists and password is correct, go to main page
if(isset($id)){
    $_SESSION['currentUser'] = $user;
    header('Location: main.php');
}else{
    echo"<div id='logInForm'><h4>";
    echo"Incorrect password or login<br>";
    echo"<a href='login.php'>Go back</a>";
    echo"</h4></div>";
}

require 'bottomPage.php';
?>
    


