<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'src/lib/Controllers.php';
require 'src/controllers/MainController.php';

$mainController = new MainController();
$mainController->pokemons();

