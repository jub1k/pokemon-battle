<div class="container-pokemons">
    <?php foreach ($data['pokemons'] as $pokemon) : ?>
        <div class="container-pokemon">
            <input type="checkbox" value="<?= $pokemon['code'] ?>-<?= $pokemon['type'] ?>" id="pokemon-<?= $data['player'] ?>-<?= $pokemon['code'] ?>">
            <label for="pokemon-<?= $data['player'] ?>-<?= $pokemon['code'] ?>"><?= $pokemon['pokemon'] ?> <br> <strong>Tipo:</strong> <?= $pokemon['desc'] ?></label>
        </div>
    <?php endforeach; ?>
</div>
