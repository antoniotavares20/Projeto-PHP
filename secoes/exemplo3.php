<?php
//esse exemplo mostra como se cria e apaga uma variavel de seção
//este é um array super global
//todas as regras definidas anteriormente podem ser empregadas utilizando o require once ;
require_once("config.php");
session_unset($_SESSION['nome']);
session_destroy($_SESSION['nome']);
?>