<?php

function dd($value){
    echo("<pre>");
    die(var_dump($value));
    echo("</pre>");
}


function connectToDb(){
    return $connect = new mysqli("127.0.0.1", "root", "", "notatki");
}


?>