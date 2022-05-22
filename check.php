<?php require 'topPage.php';?>

<?php
echo"    <link href='style.css' rel='stylesheet' type='text/css'>";
require 'functions.php';
$connect = new mysqli("127.0.0.1", "root", "", "");
$sql = file('notatki.sql');
$query = '';

//if database doesn't exist, create one
foreach ($sql as $line)	{
	
	$startWith = substr(trim($line), 0 ,2);
	$endWith = substr(trim($line), -1 ,1);
	

	$query = $query . $line;
	if ($endWith == ';') {
		echo'<div id="logInForm">';
		mysqli_query($connect,$query) or die('Problem in executing the SQL query, 
		most probably database and records you try to import already exist <b><br><br>' . mysqli_error($connect) . '<br><br>'
		. $query. '</b>'
		. 'Click <a href="index.php">here</a> to go back'
	);
		$query= '';		
		echo'</div>';
	}
}
echo'<div id="logInForm">';
echo '<a href="login.php">Wszystko okej, kliknij aby rozpocząć korzystanie
ze strony. Główny plik znajduje się w main.php</a>
' ;
echo'</div>';
?>

<?php require 'bottomPage.php';?>