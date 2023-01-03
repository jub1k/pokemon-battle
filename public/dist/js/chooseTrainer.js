const chooseTrainer = (() => {

    const training = () => {
        const player1 = document.querySelectorAll('input[name="player-1"]')
            , msg1 = document.querySelector('#player-msg1')
            , response1 = document.querySelector('#player-response1');
        const player2 = document.querySelectorAll('input[name="player-2"]')
            , msg2 = document.querySelector('#player-msg2')
            , response2 = document.querySelector('#player-response2');

        player1.forEach((player) => {
            player.addEventListener('change', (e) => {
                e.preventDefault();
                if (player.checked){
                    globFunctions.setCoo('player1', player.value)
                    msg1.innerHTML =  `Jugador 1 a seleccionado el entrenador pokemon no. ${player.value}`;

                    fetch(`pokemons.php`, {
                        method: 'post',
                        body: JSON.stringify({player: player.value})
                    }).then(res => res.text())
                        .then((data) => {
                            response1.innerHTML = data;
                        })
                }

                player1.forEach((player) => {
                    if (!player.checked){
                        player.disabled = true;
                    }
                })
            })
        })

        player2.forEach((player) => {
            player.addEventListener('change', () => {
                if (player.checked){
                    globFunctions.setCoo('player2', player.value)
                    msg2.innerHTML =  `Jugador 2 a seleccionado el entrenador pokemon no. ${player.value}`;

                    fetch(`pokemons.php`, {
                        method: 'post',
                        body: JSON.stringify({player: player.value})
                    }).then(res => res.text())
                        .then((data) => {
                            response2.innerHTML = data;
                        })
                }
                player2.forEach((player) => {
                    if (!player.checked){
                        player.disabled = true;
                    }
                })
            })
        })
    }


    return{
        choose: training
    }

})();