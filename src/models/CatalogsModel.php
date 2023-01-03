<?php


class CatalogsModel
{
    public function pokemonTrainers():array
    {
        return [
            ['code' => 1, 'trainer' => 'pokemon-trainer-gray.png'],
            ['code' => 2, 'trainer' => 'pokemon-trainer-multi.png'],
            ['code' => 3, 'trainer' => 'pokemon-trainer-red.png'],
        ];
    }

    public function pokemons():array
    {
        return [
            ['code' => 1, 'pokemon' => 'Pikachu'    , 'type' => 4, 'desc' => 'Eléctrico'],
            ['code' => 2, 'pokemon' => 'Bulbasaur'  , 'type' => 3, 'desc' => 'Planta'],
            ['code' => 3, 'pokemon' => 'Squirtle'   , 'type' => 1, 'desc' => 'Agua'],
            ['code' => 4, 'pokemon' => 'Metapod'    , 'type' => 3, 'desc' => 'Planta'],
            ['code' => 5, 'pokemon' => 'Beedrill'   , 'type' => 3, 'desc' => 'Planta'],
            ['code' => 6, 'pokemon' => 'Pidgeot'    , 'type' => 2, 'desc' => 'Fuego'],
            ['code' => 7, 'pokemon' => 'Ekans'      , 'type' => 1, 'desc' => 'Eléctrico'],
            ['code' => 8, 'pokemon' => 'Vulpix'     , 'type' => 2, 'desc' => 'Fuego'],
            ['code' => 9, 'pokemon' => 'Golbat'     , 'type' => 3, 'desc' => 'Planta'],
            ['code' => 10, 'pokemon' => 'Diglett'   , 'type' => 2, 'desc' => 'Fuego'],
        ];
    }
}