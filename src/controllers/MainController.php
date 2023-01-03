<?php
require 'src/models/CatalogsModel.php';

final class MainController extends Controllers
{
    private CatalogsModel $catalogs;

    public function __construct()
    {
        $this->catalogs = new CatalogsModel();
    }

    final public function index():void
    {
        $data = [
            'pokemonTrainer' => $this->catalogs->pokemonTrainers(),
        ];

        try {
            $this->render('main/index', $data);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    final public function pokemons():void
    {
        $_POST = json_decode(file_get_contents('php://input'), true);
        $aa = $this->catalogs->pokemons();
        shuffle($aa);
        $data = [
            'pokemons' => array_slice($aa, 4),
            'player' => $_POST['player']
        ];

        try {
            $this->render('pokemon/pokemons', $data);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}