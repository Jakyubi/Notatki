    <?php
require 'topPage.php';
require 'functions.php';
$connect = connectToDb();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users VALUES ('', '$username', '$password')";


if(mysqli_query($connect, $sql)){

    echo("<div id='logInForm'><h4>");
    echo("ACCOUNT SUCCESSFULLY CREATED, GO BACK TO <a href='login.php'>LOGIN PAGE</a>");
    echo("</h4></div>");
} else{
    echo "ERROR: Couldn't add new user, sql statement: $sql. 
    <br>Possible reason: "
    . mysqli_error($connect);
}


?>
    <?php require 'bottomPage.php';?>




