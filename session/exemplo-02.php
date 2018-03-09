<?php

require_once("config.php");

//limpa a variável e manter na sessão.
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];
//destroi a variável e apaga da sessão.
session_destroy();

?>