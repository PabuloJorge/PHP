<?php
//iniciando ou recuperando a sessão
session_start();

//apaga todas as variáveis da sessão
$_SESSION = array();

//por último, destrói a sessão
session_destroy();