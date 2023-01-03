

<div class="container-choice-trainings">
    <div class="container-choice">
        <p>Elige tu avatar jugador 1</p>
        <div class="container-trainings">
            <?php foreach ($data['pokemonTrainer'] as $trainer) : ?>
                <div class="container-training">
                    <input type="radio" value="<?= $trainer['code'] ?>" id="player-<?= $trainer['code'] ?>" name="player-1">
                    <label class="training-img" for="player-<?= $trainer['code'] ?>">
                        <img src="public/dist/images/trainers/<?= $trainer['trainer'] ?>"
                             alt="<?= $trainer['code'] . $trainer['trainer'] ?>">
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
        <p id="player-msg1"></p>
        <p id="player-response1"></p>
    </div>
    <div class="container-choice">
        <p>Elige tu avatar jugador 2</p>
        <div class="container-trainings">
            <?php foreach ($data['pokemonTrainer'] as $trainer) : ?>
                <div class="container-training">
                    <input type="radio" value="<?= $trainer['code'] ?>" id="player-2-<?= $trainer['code'] ?>" name="player-2">
                    <label class="training-img" for="player-2-<?= $trainer['code'] ?>">
                        <img src="public/dist/images/trainers/<?= $trainer['trainer'] ?>"
                             alt="<?= $trainer['code'] . $trainer['trainer'] ?>">
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
        <p id="player-msg2"></p>
        <p id="player-response2"></p>
    </div>
</div>

<script>
    window.addEventListener('load', () => {
        chooseTrainer.choose()
    })
</script>