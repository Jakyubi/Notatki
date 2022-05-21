<?php
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
		mysqli_query($connect,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
		$query= '';		
	}
}
echo '<a href="main.php">Wszystko okej, kliknij aby rozpocząć korzystanie
ze strony. Główny plik znajduje się w main.php</a>

';
?>