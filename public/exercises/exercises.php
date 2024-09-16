<main class="exercisesPage">
    <div class="titlePageContainer">
        <h2 class="titlePage">Treino</h2>
    </div>
    <div class="listaDiv">
        <ul class="listaExercicio">
            <?php
            include_once '../class/exercises.php';
            $exe = new exercises();
            $listar = $exe->listar();

            if (!empty($listar)) {
                foreach ($listar as $chave => $mostrar) { ?>
                    <li class="itemListaExercicio">
                        <div class="cardExercicio" style="min-width: 300px;">
                            <div class="nomeExercicio" scope="row">
                                <h3><?= $mostrar['exercicio'] ?></h3>
                                <span>
                                    <a href="?p=exercises/view&id=<?= $chave ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/></svg>
                                    </a>
                                </span>
                            </div>
                            <div class="quantRepeticoes">
                                <p><?= $mostrar['repeticoes'] ?></p>
                            </div>
                            <div class="quantSeries">
                                <p><?= $mostrar['series'] ?></p>
                            </div>
                            <div class="quantPeso">
                                <p><?= $mostrar['peso'] ?></p>
                            </div>
                        </div>
                    </li>
            <?php
                }
            }
            ?>
        </ul>
    </div>
</main>