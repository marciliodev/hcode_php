<?php
// Arrays Globais
$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
echo "</br>";

$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;
echo "</br>";

?>