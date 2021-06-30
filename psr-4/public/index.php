<?php

require_once '../vendor/autoload.php';

//o arquivo/classe HomeController pode ser carregado com use
use \App\Controllers\HomeController;
//e então apenas criasse a instância:

$home1 = new HomeController;
echo $home1->index() . ' 1';

//ou pode ser carregado como instância:
$home2 = new \App\Controllers\HomeController;
echo $home2->index() . ' 2';

//Pode-se usar um alias tmabém:
use \App\Controllers\HomeController as home;

$home3 = new Home;
echo $home2->index() . ' 3';

// Usando a abreviação do autoload

$database = new \ETI\DB\DataBase;
var_dump($database->getConn());