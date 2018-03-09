<?php

//recupera a sessão anterior
session_id('t6f801v3a0rttflk5d7gavfml7');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);


?>