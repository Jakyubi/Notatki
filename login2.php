<?php
session_start();

require 'functions.php';
$connect = connectToDb();
$username = $_POST['username'];
$password = $_POST['password'];



$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";


$zapytanie=$connect->query($sql);

foreach($zapytanie as $users){
    $id = $users["id"];
    $user = $_REQUEST['username'];
}

if(isset($id)){
    $_SESSION['currentUser'] = $user;
    echo($_SESSION['currentUser']);
    header('Location: main.php');
}else{
    echo"Incorrect password or login";
}


?>