<?php

$name = $_POST['name'];
$score = $_POST['score'];

$mysql = new mysqli('localhost', 'root', '', 'tictac');
if ($mysql->connect_error){
    echo $mysql->connect_error;
}
$sql = "INSERT INTO score (name, score) VALUES ('$name', '$score')";
$mysql->query($sql);
$mysql->close();