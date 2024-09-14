<main class="exercisesPage">
    <div class="titlePageContainer">
        <h2 class="titlePage">Treino</h2>
    </div>

    <!-- Função desativada  -->
    <!-- <div class="optionsExerciseDiv">
        <div class="optionsExercise">
            <button class="btn-toggle active" value="a" data-option="a">A</button>
            <button class="btn-toggle" value="b" data-option="b">B</button>
            <button class="btn-toggle" value="c" data-option="c">C</button>
        </div>
    </div> -->
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
                        <div class="cardExercicio" style="min-width: 300px;">
                            <div class="nomeExercicio" scope="row">
                                <h3><?= $mostrar['exercicio'] ?></h3>
                                <span>
                                    <a href="?p=exercises/excluir&id=<?= $chave ?>" data-confirm>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" fill="#e8eaed">
                                            <path
                                                d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                                        </svg>
                                    </a>
                                    <a href="?p=exercises/editar&id=<?= $chave ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" fill="white" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            
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