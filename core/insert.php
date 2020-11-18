<?php 
//INC
include("connect.php");
include("functions.php");



// INSERT
$send = insertInto("maTable", $_POST, $bdd);

// echo $send;
// var_dump($send);
