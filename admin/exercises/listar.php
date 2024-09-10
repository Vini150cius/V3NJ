<main class="exercisesPage">
    <div class="titlePageContainer">
        <h2 class="titlePage">Treino</h2>
    </div>

    <div class="optionsExerciseDiv">
        <div class="optionsExercise">
            <button class="btn-toggle active" value="a" data-option="a">A</button>
            <button class="btn-toggle" value="b" data-option="b">B</button>
            <button class="btn-toggle" value="c" data-option="c">C</button>
        </div>
    </div>
    <div class="addExerciseContainer">
        <button class="addExercise"><a href="?p=exercises/salvar">+ Adicionar</a></button>
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
                        <div class="cardExercicio">
                            <div class="nomeExercicio" scope="row">
                                <?= $chave ?>
                                <h3><?= $mostrar['exercicio'] ?></h3>
                                <span>
                                    <a href="?p=exercises/excluir" data-confirm>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" fill="#e8eaed">
                                            <path
                                                d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                                        </svg>
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